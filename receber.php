<?php 
require_once 'vendor/autoload.php'; 
$nome=$_POST['nome'];
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($nome);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString() ;?>
?>