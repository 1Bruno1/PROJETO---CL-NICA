<?php

require 'src/conexao_com_banco.php';
//   conexão com banco
//   O ../ serve para mudar as pastas
//   Mudamos da pasta PACIENTE para o arquivo CONEXAO_COM_BANCO

$sql = "SELECT * FROM medico";
//   Pesquisando todos os pacientes


$tabelaMedicos = mysqli_query($conexao, $sql);
//   Executando o comando do sql



?>