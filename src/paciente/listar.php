<?php

require 'src/conexao_com_banco.php';
//   conexão com banco
//   O ../ serve para mudar as pastas
//   Mudamos da pasta PACIENTE para o arquivo CONEXAO_COM_BANCO

$sql = "SELECT * FROM paciente";
//   Pesquisando todos os pacientes


$tabelaPacientes = mysqli_query($conexao, $sql);
//   Executando o comando do sql


//   Armazenando em array associativo

?>