<?php

require_once 'vendor/autoload.php';
require_once 'classes/TileFacebook.php';
require_once 'classes/TileTwitter.php';

$fb_res = [];
$tweet = [];


$fb = new TileFacebook('config/config.ini');
$fb_res = $fb->getLatestStatus();

$twitter = new TileTwitter('config/config.ini');
$tweet = $twitter->getTweetWritenBy(2228736763, 1, 'firefoxosfr');
$tweet_id = array_keys($tweet)[0];
$tweet_text = $tweet[$tweet_id]['text'];

include 'includes/header.php';
include 'includes/body.php';
include 'includes/footer.php';
