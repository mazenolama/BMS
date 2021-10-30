<?php
require_once('../vendor/autoload.php');
require_once('../database/config.php');
require_once './Controllers/HomeController.php';

echo 'Hello ' . $fname .' '. $lname .'<br>';
echo 'Your Email Adress is :' .$email .'<br>';
echo 'And You Phone number is :' . $phone_no;

?>