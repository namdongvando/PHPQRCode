<?php
use PHPQRCODE\QRCODECLASSS;
include("src/QRCODECLASSS.php");
$qrcode = new QRCODECLASSS();
$qrcode->data = "111111";
$qrcode->size = "7";
$qrcode->level = 2;
$qrcode->Images((array) $qrcode);