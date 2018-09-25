<?php 
require_once 'vendor/autoload.php'; 

use Endroid\QrCode\QrCode;

$qrCode = new QrCode();

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();