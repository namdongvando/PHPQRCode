<?php
include(__DIR__ . "/qrlib.php");
$PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;
$PNG_WEB_DIR = 'temp/';
if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);
$filename = $PNG_TEMP_DIR . 'test.png';
$errorCorrectionLevel = 'H';
if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L', 'M', 'Q', 'H')))
    $errorCorrectionLevel = $_REQUEST['level'];
$matrixPointSize = 10;
if (isset($_REQUEST['size']))
    $matrixPointSize = min(max((int) $_REQUEST['size'], 1), 10);

if (isset($_REQUEST['data'])) {
    if (trim($_REQUEST['data']) == '')
        die('data cannot be empty! <a href="?">back</a>');
    $filename = $PNG_TEMP_DIR . 'test' . md5($_REQUEST['data'] . '|' . $errorCorrectionLevel . '|' . $matrixPointSize) . '.png';
    QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 1);
}
$type = 'image/jpg';
header('Content-Type:' . $type);
header('Content-Length: ' . filesize($filename));
readfile($filename);