<?php

$uniqid = $fromAjax['uniqid'] ?? NULL;
$uniqid = preg_replace("/[^[:alnum:][:space:]]/u", '', $uniqid); //Sanitize

/* Create JSON if non-existent
 *
 *
 *
 */
if ( !file_exists ("/var/www/arima/json_storage/$uniqid.json") ) {
    
    $putUserData = [
                            1 => [],
                            2 => [],
                            3 => [],
                            4 => [],
                            5 => [],
        ];
    
    $putJsonUserData = json_encode($putUserData);
    file_put_contents("/var/www/arima/json_storage/$uniqid.json", $putJsonUserData);
    
}

/* Load JSON
 *
 *
 *
 */
$userData = json_decode(file_get_contents("/var/www/arima/json_storage/$uniqid.json"), true);