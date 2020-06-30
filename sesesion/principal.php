<?php
session_start();
if ($_SESSION['usuario_login'] == 1){
	echo "Bem vindo ao sistema";
}else{
	header('Location: index.php');
}

?>