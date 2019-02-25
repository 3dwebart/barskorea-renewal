<?php
$header_path = dirname(__FILE__)."/header.php";
include_once($header_path);
$name     = post('name');
$company  = post('company');
$email    = post('email');
$phone    = post('phone');
$country  = post('country');
$message  = post('message');

?>