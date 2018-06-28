<?php
/* Sanitize
 *
 *
 *
 */

if ( !isset($fromAjax['cardIndex']) || !isset($fromAjax['uniqid']) ) {
    $errMsg = 'fromAjax variables not set';
    return;
}

$cardIndex = filter_var($fromAjax['cardIndex'], FILTER_SANITIZE_NUMBER_INT);
$uniqid = preg_replace("/[^[:alnum:][:space:]]/u", '', $fromAjax['uniqid']);

if ($cardIndex < 1 || $cardIndex > 5) {
    $errMsg = 'Incorrect card index value';
    return;
}

/* Load JSON if exists
 *
 *
 *
 */

if ( !file_exists ("/var/www/arima/json_storage/$uniqid.json") ) {
    $errMsg = 'No user data file found';
    return;
}

$userData = json_decode(file_get_contents("/var/www/arima/json_storage/$uniqid.json"), true);
$userData[$cardIndex] = [];
$putJsonUserData = json_encode($userData);

$deletedBytes = file_put_contents("/var/www/arima/json_storage/$uniqid.json", $putJsonUserData);