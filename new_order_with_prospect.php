<?php
include('limelight.php');

$prospectId = $_REQUEST['prospectId'];
$phone = $_REQUEST['phone'];
$creditCardNumber = $_REQUEST['creditCardNumber'];
$creditCardType = $_REQUEST['creditCardType'];
$expirationDate = $_REQUEST['expmonth'].$_REQUEST['expyear'];
$CVV = $_REQUEST['CVV'];
$shippingId = $_REQUEST['shippingId'];
$productId = $_REQUEST['productId'];


$api_client = new LimeLight_Client('LIMELIGHT_API_USERNAME', 'LIMELIGHT_API_PASSWORD', 'LIMELIGHT_API_LINK');

$parameters    = array(
  'prospectId' => $prospectId,
  'creditCardType' => $creditCardType,
  'creditCardNumber' => $creditCardNumber,
  'expirationDate' => $expirationDate,
  'CVV' => $CVV,
  'shippingId' => 2,
  'productId' => 2,
  'tranType' => 'Sale',
  'phone' => $phone
);

$response = $api_client->get_response('NewOrderWithProspect','transaction',$parameters);

header("location: thankyou.php");

