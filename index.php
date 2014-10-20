<?php

require_once 'vendor/autoload.php';
require_once("classes/TileFacebook.php");

$fb_res = [];
$fb = new TileFacebook('config/config.ini');
$fb_res = $fb->getLatestStatus();



include('includes/header.php');
include('includes/body.php');
include('includes/footer.php');
