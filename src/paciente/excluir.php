<?php

//   Conexão com o banco
require 'src/conexao_com_banco.php';


//   Pegar ID
$pacienteId = (isset($_GET['id']) ? $_GET['id'] : 0);


//   Tentar excluir do banco de dados usando Comando SQL
$sql = "DELETE * FROM paciente WHERE id = $pacienteId";
mysqli_query($conexao, $sql);


//   Retornar para a página pacientes
header('location: http://localhost/clinica_umbrela/?pagina=paciente');


?>