<?php

include_once('index.php')
?>

<h1 style="text-align:center;">
<?php
$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_login = $_POST["login"];
$_senha = $_POST["senha"];

echo ("Login:".$_login."<br>");
echo ("Senha:".$_senha."<br>");
echo ("Nome:".$_nome."<br>");
echo ("Sobrenome:".$_sobrenome."<br>");
?>
</h1>
