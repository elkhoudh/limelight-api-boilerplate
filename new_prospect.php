<?php
include('limelight.php');

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$address1 = $_REQUEST['address1'];
$address2 = $_REQUEST['address2'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];

$api_client = new LimeLight_Client('reliefhempoil', 'mbV2d39UK8VzjF', 'https://digittopia.limelightcrm.com/admin/');

$parameters    = array(
  'firstName'  => $firstName,
  'lastName'   => $lastName,
  'address1'   => $address1,
  'address2'   => $address2,
  'city'       => $city,
  'state'      => $state,
  'zip'        => $zip,
  'country'    => $country,
  'email'      => $email,
  'ipAddress'  => '127.0.0.1',
  'AFID'       => '',
  'campaignId' => 1,
);

$response = $api_client->get_response('NewProspect','transaction',$parameters);

header("location: second.php?prospectId=".$response['prospectId']."&phone=".$phone."");