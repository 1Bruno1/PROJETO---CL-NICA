<?php

$servername = "localhost";
$database = "umbrela";
$username = "root";
$password = "aluno";


// CRIANDO A CONEXÃO
$conexao = mysqli_connect($servername, $username, $password, $database);


// CHECANDO A CONEXÃO
if (!$conexao){

    die("FALHA NA CONEXÃO: ".mysqli_connect_error());

}


?>