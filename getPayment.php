<?php

    require 'ConfigFactory.php';
    require 'OAuthFactory.php';

    $accessTokenData=getAccessToken();
    
    $endpoint = ConfigFactory::getEndpoints();
    
    $paymentId=$argv[1];
    $payment = new OAuthFactory($endpoint['getPaymentById'], $accessTokenData, null, $paymentId );
    $payment->createHeader();
    
    $paymentData=sendRequest($payment->headers, $payment->linkArray );
    
    echo "\n\n\n\n\n".$paymentData;

?>
