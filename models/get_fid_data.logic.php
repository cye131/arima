<?php
/* Sanitize
 *
 *
 *
 */

if ( !isset($fromAjax['cardIndex']) || !isset($fromAjax['uniqid']) || !isset($fromAjax['lookup_code']) || !isset($fromAjax['freq']) || !isset($fromAjax['min_date']) || !isset($fromAjax['max_date']) ) {
    $errMsg = 'fromAjax variables not set';
    return;
}
$lookup_code = filter_var($fromAjax['lookup_code'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
$freq = preg_replace('/[^a-z]/','',$fromAjax['freq']);
$min_date = preg_replace('/[^0-9-]/','',$fromAjax['min_date']);
$max_date = preg_replace('/[^0-9-]/','',$fromAjax['max_date']);
$cardIndex = filter_var($fromAjax['cardIndex'], FILTER_SANITIZE_NUMBER_INT);
$uniqid = preg_replace("/[^[:alnum:][:space:]]/u", '', $fromAjax['uniqid']);


if ($cardIndex < 1 || $cardIndex > 5) {
    $errMsg = 'Incorrect values sent to AJAX';
    return;
}


$series = ['lookup_code' => $lookup_code,'freq' => $freq,'min_date' => $min_date,'max_date' => $max_date];
$resData = (new DataScraperFid($series))->return_results();


if ( $resData == null || count($resData) < 1) {
          $errMsg = 'No data was able to be returned';
          return;
}

$userData = json_decode(file_get_contents("/var/www/arima/json_storage/$uniqid.json"), true);
$userData[$cardIndex] = ['info' => array('name' => $series['lookup_code'],
                                                                       'observations' => count($resData['data']),
                                                                       'obs_start' => $resData['data'][0][0],
                                                                       'obs_end' => $resData['data'][count($resData['data']) - 1][0]
                                                                       ),
                                               'data' => $resData['data']
                                             ];

$putJsonUserData = json_encode($userData);
file_put_contents("/var/www/arima/json_storage/$uniqid.json", $putJsonUserData);