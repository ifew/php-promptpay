<?php
include_once("vendor/autoload.php");
use ThaiPromptpay\PromptpayQR;

$qr = new PromptpayQR;
$qr->setPromptpayType('02');
$qr->setPromptpayID('1969900166736');
$qr->setAmount(100000.00);
echo $qr->getQR();
?>
