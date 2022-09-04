<?php
require_once '../vendor/autoload.php';
use App\classes\FullName;
$obj = new FullName($_POST);
$result=$obj->getName();
include 'index.php';