<?php
require_once('./TileTwitter.php');

$favorite = new TileTwitter('../config/config.ini');
$favorite->getTweetWriteBy(2228736763, 3, 'firefoxosfr');
?>
