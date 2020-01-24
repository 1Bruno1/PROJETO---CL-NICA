<?php

require 'src/conexao_com_banco.php';

$medicoId = (isset($_GET['id']) ? $_GET['id'] : 0);


$sql = "SELECT * FROM medico WHERE id = $medicoId";


$medico= mysqli_query($conexao, $sql);
$medico=  mysqli_fetch_assoc($medico);

if(!$medico){

    $medico = array();
    $medico['nome'] = "Nome";
    $medico['area'] = "Área";
    $medico['email'] = "Email";

}



?>