<?php
require_once("TileTwitter.php");

$favorite = new TileTwitter("../config.ini");
$favorite->getTweetWriteBy(443198901,3,"Maton_Anthony");
?>