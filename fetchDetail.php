<?php

include '/vendor/razorpay/Razorpay.php';
use razorpay\src\Api;

$api = new Api('Secret ID', 'Secret Key');

$payment = $api->payment->fetch($_REQUEST['billno']);

echo $payment->amount;
print_r($payment->notes);

?>
