<?php
setcookie ( "nome",$_POST['name'], time()+60*60*24);
setcookie ( "email",$_POST['email'], time()+60*60*24);
setcookie ( "cidade",$_POST['cidade'], time()+60*60*24);

header('Location: mensagem.php');
?>