<?php
 try {
  #Local Database
  $server = "localhost"; /*maquina a qual o banco de dados está*/
  $user = "root"; /*usuario do banco de dados MySql*/
  $pass = ""; /*senha do banco de dados MySql*/
  $db = "integrado"; /*seleciona o banco a ser usado*/
 
  $conexao = mysqli_connect($server,$user,$pass, $db);  /*Conecta no bando de dados MySql*/
 
 }catch (\Throwable $th) {
  var_dump($th);
 }
?>