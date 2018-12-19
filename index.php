Hello

Hello 2

<?php
use razorpay\Api\Api;
$api = new Api('rzp_test_sEA6555roiMFZP', 'PQLT3VqL00JLZbJ0GGy4uNlq');
$payment = $api->payment->fetch($_REQUEST['billno']);
echo $payment->amount;
print_r($payment->notes);
echo "abcde";
?>
