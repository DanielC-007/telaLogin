<?php

$bdhost = 'localhost';
$bdUserName = 'root';
$bdPassword = '';
$bdName = 'login';
$conexao = new mysqli($bdhost, $bdUserName, $bdPassword, $bdName);

if($conexao->connect_errno){
    echo "Erro";
}
?>