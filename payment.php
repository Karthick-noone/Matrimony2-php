<?php

// <!-- initializ payment process -->
// Include the PayPal PHP SDK
// require 'paypal/autoload.php';

// 2 . set api credential
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'YOUR_CLIENT_ID',
        'YOUR_CLIENT_SECRET'
    )
);

// 3. create payment

$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');
$amount = new \PayPal\Api\Amount();
$amount->setTotal('10.00');
$amount->setCurrency('USD');
$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount);
$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl('https://yourwebsite.com/success');
$redirectUrls->setCancelUrl('https://yourwebsite.com/cancel');

// 4. execute the payment

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale');
$payment->setPayer($payer);
$payment->setTransactions([$transaction]);
$payment->setRedirectUrls($redirectUrls);
try {
    $payment->create($apiContext);
    // Redirect the user to PayPal for payment
    header('Location: ' . $payment->getApprovalLink());
} catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // Handle connection error
}

// 5. handle payment confirmation
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    // User successfully paid
    $paymentId = $_GET['paymentId'];
    $payerId = $_GET['PayerID'];
    $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
    $execution = new \PayPal\Api\PaymentExecution();
    $execution->setPayerId($payerId);
    try {
        $payment->execute($execution, $apiContext);
        // Payment is successful
    } catch (\PayPal\Exception\PayPalConnectionException $ex) {
        // Handle payment execution error
    }
} else {
    // Payment canceled or failed
}









?>