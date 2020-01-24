<?php

require 'src/conexao_com_banco.php';

$consultaId = (isset($_GET['id']) ? $_GET['id'] : 0);


$sql = "SELECT * FROM consulta WHERE id = $consultaId";


$consulta= mysqli_query($conexao, $sql);
$consulta=  mysqli_fetch_assoc($consulta);

if(!$consulta){

    $consulta = array();
    $consulta['data_consulta'] = "";

}


?>