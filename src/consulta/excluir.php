<?php

//   Conexão com o banco
require '../conexao_com_banco.php';


//   Pegar ID
$consultaId = (isset($_GET['id']) ? $_GET['id'] : 0);


//   Tentar excluir do banco de dados usando Comando SQL
$sql = "DELETE FROM consulta WHERE id = $consultaId";
mysqli_query($conexao, $sql);


//   Retornar para a página pacientes
    header('location: http://localhost/clinica_umbrela/?pagina=consulta');


?>