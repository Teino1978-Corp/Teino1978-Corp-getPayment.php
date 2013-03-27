<?php

require_once 'enterCreds2.php';
require_once 'OAuth.php';

$accessTokenData= getAccessToken($links,$creds);

$paymentId='';
$paymentData= new ParamsAndHeaders($links['getPaymentById'],$creds,$accessTokenData,null,$paymentId);

$paymentData->createHeader($info);

parse_str(sendRequest($paymentData->headers, $paymentData->linkArray),$paymentResponse);

?>
