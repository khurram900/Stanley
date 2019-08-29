<?php

function msacommon_successResponse($results = []){
    return response()->json((new \MSACommon\MSACommon\Common\ApiResponse())->setResults(
        $results
    )->toArray());
}


function msacommon_errorResponse(){
    return (new \MSACommon\MSACommon\Common\ApiResponse())->setResults(
        $results
    );
}


function msacommon_makeErrorArray(array &$errorsArray,$key,$message){
    $errorsArray[$key] = $message;
}

function msacommon_convertErrorBagToCompaitableArray(array &$preparedErrors,array $errorsArray){
    foreach ($errorsArray as $key=>$errors){
        msacommon_makeErrorArray($preparedErrors,$key,$errors[0]);
    }
}


function msacommon_recur_ksort(&$array) {
    foreach ($array as &$value) {
        if (is_array($value)) msacommon_recur_ksort($value);
    }
    return ksort($array);
}