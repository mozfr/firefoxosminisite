<?php
namespace FirefoxOSfr;
require_once '../vendor/autoload.php';

// Cache contant
define("CACHE_PATH", "../cache/");

$fb_res = [];
$tweet = [];

$fb = new TileFacebook('../config/config.ini');
$fb_res = $fb->getLatestStatus();

$twitter = new TileTwitter('../config/config.ini');
$tweet = $twitter->getTweetWritenBy(2228736763, 1, 'firefoxosfr');
$tweet_id = array_keys($tweet)[0];
$tweet_text = $tweet[$tweet_id]['text'];

include 'includes/header.php';
include 'includes/body.php';
include 'includes/footer.php';
