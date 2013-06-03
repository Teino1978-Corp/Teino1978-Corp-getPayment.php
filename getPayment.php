<?php
 
require 'ConfigFactory.php';
require 'OAuthFactory.php';
require 'Utility.php';
 
$accessTokenData=Utility::getStoredTokens();
$endpoint = ConfigFactory::getEndpoints();

    $paymentId="";
    
    $payment = new OAuthFactory($endpoint['getPaymentById'], $accessTokenData, null, $paymentId );
    $payment->createHeader();
    $paymentData=sendRequest()
    ;
    echo $paymentData;
 
?>