<?php

require 'src/conexao_com_banco.php';

$pacienteId = (isset($_GET['id']) ? $_GET['id'] : 0);


$sql = "SELECT * FROM paciente WHERE id = $pacienteId";


$paciente= mysqli_query($conexao, $sql);
$paciente=  mysqli_fetch_assoc($paciente);

if(!$paciente){

    $paciente = array();
    $paciente['nome'] = "Nome";
    $paciente['cpf'] = "CPF";
    $paciente['nascimento'] = "";

}



?>