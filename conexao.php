<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_reservas';
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if(!$conexao){
    die("<br> nao conectou!!! ERRO : " .
  mysqli_connect_error());
}