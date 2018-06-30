<?php

$optional_dates = $fromAjax['dates'] ?? NULL;
$data = $fromAjax['data'] ?? NULL;
$fn = $fromAjax['fn'] ?? NULL;

$ts = new Timeseries($data,$optional_dates,NULL,NULL,NULL,NULL,NULL);
$methods = get_class_methods($ts);

if ( in_array($fn,$methods) ) {
    $tsResult = $ts -> {$fn}();
    return;
} else {
    $errMsg = 'Timeseries method does not exist.';
    return;
}

/*
 *$dataframe = $fromAjax['dataframe'];

$e = (int) 0;
$o = (int) 0;

for ($i=0;$i<count($dataframe);$i++) {
    if ($i % 2 === 0) {
        $dates = 
    }
    $e++;
    $o++;
}
*/