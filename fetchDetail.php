<?php

// PHP SDK: https://github.com/razorpay/razorpay-php
use razorpay\razorpay\Api;
$api = new Api("rzp_test_sEA6555roiMFZP", "");

$api->utility->verifyWebhookSignature($webhookBody, $webhookSignature, $webhookSecret);

echo "hello";
echo $webhookBody;

?>
