Hello

Hello 2

<?php
use Razorpay\Api\Api;
$api = new Api('rzp_test_sEA6555roiMFZP', 'PQLT3VqL00JLZbJ0GGy4uNlq');

$api->utility->verifyWebhookSignature($webhookBody, $webhookSignature, $webhookSecret);

echo $api;


$payment = $api->payment->fetch($_REQUEST['billno']);
echo $payment->amount;
print_r($payment->notes);
echo "abcde";
?>
