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

<!-- <?php
curl -u https://rzp_test_sEA6555roiMFZP:PQLT3VqL00JLZbJ0GGy4uNlq@api.razorpay.com/v1/invoices \
   -X POST \
   --data "amount=500" \
https://rzp_test_sEA6555roiMFZP:PQLT3VqL00JLZbJ0GGy4uNlq@api.razorpay.com/v1/capture
?> -->
