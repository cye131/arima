<?php
spl_autoload_register('myAutoloader');
function myAutoloader($classname) {
  require_once "/var/www/arima/classes/$classname.class.php";
}
require_once __DIR__.'/../vendor/autoload.php';


//Routes - AJAX
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
  echo 'Not AJAX';
  return;
}


$model = $_POST['model'] ?? NULL;
$logic = $_POST['logic'] ?? NULL;
$fromAjax = $_POST['fromAjax'] ?? NULL;
$toScript = $_POST['toScript'] ?? NULL;



//Send request
if (isset($model)) {
  $sql = new MyPDO();
  foreach ($model as $m) {
    if (isset($errMsg)) break;
    require_once("/var/www/arima/models/$m.model.php");
    }
}

if (isset($logic)) {
  foreach ($logic as $l) {
    if (isset($errMsg)) break;
    require_once("/var/www/arima/models/$l.logic.php");
  }
}

$res = [];
if (isset($toScript)) {
  foreach ($toScript as $varName) {
    $res[$varName] = (${$varName}); 
  }  
}
if (isset($errMsg)) $res['errMsg'] = $errMsg;

echo json_encode($res);

