<?php

require_once 'enterCreds2.php';
require_once 'OAuth.php';

$accessTokenData= getAccessToken($links,$creds);

$paymentId='4771';
$paymentData= new ParamsAndHeaders($links['getPaymentById'],$creds,$accessTokenData,null,$paymentId);

$paymentData->createHeader($info);

sendRequest($paymentData->headers, $paymentData->linkArray);

?>
