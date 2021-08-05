
<?php
require 'header.php';
session_start();
require_once("dbcontroller.php");
require('payfast/lib/Auth.php');
require('payfast/lib/PayFastApi.php');
require('payfast/lib/PayFastBase.php');
require('payfast/lib/PayFastPayment.php');
require('payfast/lib/Request.php');
require('payfast/lib/ServiceMapper.php');
require('payfast/lib/Exceptions/InvalidRequestException.php');
require('payfast/lib/PaymentIntegrations/CustomIntegration.php');
require('payfast/lib/PaymentIntegrations/Notification.php');
require('payfast/lib/PaymentIntegrations/OnsiteIntegration.php');
require('payfast/lib/Services/CreditCardTransactions.php');
require('payfast/lib/Services/Refunds.php');
require('payfast/lib/Services/Subscriptions.php');
require('payfast/lib/Services/TransactionHistory.php');
/*$total_price = '5.66';*/

/*$total_price = $GLOBALS['total_price'];*/

use PayFast\PayFastPayment;

$amount = $_SESSION['total_price'];

$payfast = new PayFastPayment(
    [
        'merchantId' => '10000100',
        'merchantKey' => '46f0cd694581a',
        'passPhrase' => '',
        'testMode' => true
    ]
);

$data = [
    // Merchant details
    'return_url' => 'https://www.example.com/return.php',
    'cancel_url' => 'https://www.example.com/cancel.php',
    'notify_url' => 'https://www.example.com/notify.php',
    // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    'email_address'=> 'test@test.com',
    // Transaction details
    'm_payment_id' => '1234', //Unique payment ID to pass through to notify_url
    'amount' => $amount,
    'item_name' => 'Order#123'
];

$htmlForm = $payfast->custom->createFormFields($data, ['value' => 'PLEASE PAY', 'class' => 'button-cta']);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class='subject'>Checkout&nbsp;&nbsp;Check<br>Checkout&nbsp;&nbsp;Check</div>


<div class="containet">
    <div class="row">
        <div class="col">
            <div class='checkout'>
                <div class='order'>

                    <h2>Custom Checkout Demo</h2>
                    <h5>Order #000001</h5>
                    <h5>Shipping</h5><h4></h4>
                    <h5 class='total'>Total</h5><h1>R <?= $_SESSION['total_price'];?></h1>
                    <?= $htmlForm ;?>

        </div>
    </div>


        </div>
    </div>
</div>



<?php require 'footer.php';?>

</body>
</html>

