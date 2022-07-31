<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/CheckRequest/DateController.php');

use CheckRequest\DateController;
//headers

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//instance of date class
$date = new DateController();
$date=$date->check_date();
print_r($date);
