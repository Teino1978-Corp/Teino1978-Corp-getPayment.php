<?php

    require 'ConfigFactory.php';
    require 'OAuthFactory.php';

    $accessTokenData=getAccessToken();
    
    $endpoint = ConfigFactory::getEndpoints();
    
    $paymentId='';
    $payment = new OAuthFactory($endpoint['getPaymentById'], $accessTokenData, null, $paymentId );
    $payment->createHeader();
    
    sendRequest($payment->headers, $payment->linkArray );

?>
