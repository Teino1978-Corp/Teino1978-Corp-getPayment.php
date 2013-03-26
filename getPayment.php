<?php

require_once 'enterCreds2.php';
require_once 'OAuth.php';

$accessTokenData= getAccessToken($links,$creds);

//The payment ID of the resource being searched for shuold be entered below
$paymentId='';
$paymentData= new ParamsAndHeaders($links['getPaymentById'],$creds,$accessTokenData,null,$paymentId);

$paymentData->createHeader($info);

parse_str(sendRequest($paymentData->headers, $paymentData->linkArray),$paymentResponse);
print_r($paymentResponse);

?>
