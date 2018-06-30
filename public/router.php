<?php
spl_autoload_register('myAutoloader');
function myAutoloader($classname) {
  require_once __DIR__."/../classes/$classname.class.php";
}
require_once __DIR__.'/../vendor/autoload.php';

$twig = new Twig_Environment(
                             new Twig_Loader_Filesystem(__DIR__.'/templates'),
                             ['debug' => true,'cache' => __DIR__.'/twig-cache']
                             );

/* 
 *
 *
 *
 */
 $DEV_MODE = ( $_SERVER['REMOTE_ADDR'] === '24.99.149.88') ? true : false;
 

/* $fromRouter sends information to model and logic files
 * $model specifies /molders folder for SQL data
 * $logic specifies any model-type files for anything other than SQL data
 * $toScript specifies any variables to be returned from the model/logic files to be inserted in <script></script> tags at the bottom of the HTML body
 *  $incFiles specifies a list of JS/CSS files to be returned
 */
 $fromRouter = [];
 $model = [];
 $logic = [];
 $toScript =[];
 $incJS = [];
 
 
 /* Set defaults here
  *
  *
  *
  */
 $request = (isset($_GET['path']) && strlen($_GET['path'])) ? $_GET['path'] : 'intro';
 $incJS = ['main-fns','main'];
 CookieMonster::CookieSet();


 /* Define routes
  *
  *
  *
  */
 if ($request === 'intro') {
   $title = 'Intro';
 }
 elseif ($request === 'adddata') {
  $title = 'Add Data';
  array_push($incJS,'adddata-fns','adddata');
 }
 elseif ($request === 'graphs') {
  $title = 'Graphs';
  array_push($incJS,'graphs');
 }
 elseif ($request === 'acf') {
  $title = 'Autocorrelation Function';
  array_push($incJS,'acf');
 }
 elseif ($request === 'boxjenkins') {
   $title = 'Box-Jenkins Analyzer';
 }
 
 elseif ($request === 'about') {
  $title = 'About';
  $logic[] = 'get_readme';
  $toScript = ['readme'];
 }
 

 
 
 
 
 
 
 



/* Override the $fromAjax variables with $_POST variables if they're set
 *
 *
 *
 *
 */
 foreach ($fromRouter as $k => $fR) {
  if ( isset($_POST[$k]) && !is_null($_POST[$k]) ) {
   $fromRouter[$k] = $_POST[$k];
  }
 }


 /* Execute models and logics scripts
  *
  *
  *
  */
 if (count($model) > 0) {
   $sql = new MyPDO();
   foreach ($model as $m) {
     require_once("/var/www/arima/models/$m.model.php");
     }
 }
 
 if (count($logic) > 0) {
   foreach ($logic as $l) {
     require_once("/var/www/arima/models/$l.logic.php");
   }
 }
 
 
 /* Prepares variables to send to HTML template
  *
  *
  *
  */

 if (count($toScript) > 0) {
   $scriptStr = '';
   foreach ($toScript as $varName) {
     $scriptStr .= "$varName = ".json_encode(${$varName}).';'; 
   }
   $script = new StaticFile('js',$scriptStr);
   $toHTML['bodyScript'] = $script->minify();
 }
 else $toHTML['bodyScript'] = '';
 
 $toHTML['title'] = ( isset($title) ) ? $title : 'No Title';
 
 
 if ($DEV_MODE === true) {
  $minifier = new MatthiasMullie\Minify\JS(__DIR__."/../js/main.js");
  foreach ($incJS as $js) {
   $minifier->add(__DIR__."/../js/$js.js");
  }
  $minifier->minify(__DIR__."/static/$request.js");
 }
 
 if (count($incJS) > 0) $toHTML['pageJS'] = '<script src="static/'.$request.'.js"></script>';
 else $toHTML['pageJS'] = '';


 
 /* Renders page
  *
  *
  *
  */
 
 
 try { echo $twig->render($request.'.html', $toHTML); }
 catch (Exception $e) { echo 'Page not found'; }