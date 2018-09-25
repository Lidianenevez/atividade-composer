<?php 
require_once 'vendor/autoload.php'; 
$nome=$_POST['nome'];
$email=$_POST['email'];
$date=$_POST['date'];

use Respect\Validation\Validator as v;

$evalido=v::email()->validate($email);
$data=v::date()->validate($date);

if ($evalido === true){
	echo "$email: <b>Valido</b> <br>";

}else{
	echo " $email: <b>invalido</b> <br>";
}

if ($data === true){
	echo " $date: <b>Valido</b><br>";
}else{
	echo " $date: <b>invalido</b> <br>";
}
