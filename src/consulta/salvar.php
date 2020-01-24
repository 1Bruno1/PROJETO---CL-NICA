<?php

//   Conexão com banco
require '../conexao_com_banco.php';


//  receber dados POST
$id = isset($_POST['id']) ? $_POST['id'] : 0;
$data_consulta = isset($_POST['data_consulta']) ? $_POST['data_consulta'] : '';
$id_paciente = isset($_POST['id_paciente']) ? $_POST['id_paciente'] : 0;
$id_medico = isset($_POST['id_medico']) ? $_POST['id_medico'] : 0;
$data_agendamento = date('Y-m-d');

//  Validar dados (verificar se ta vazio)
if (!empty($data_consulta) && $id_paciente !== 0 && $id_medico !== 0){

    //  se o ID foi enviado...
    if ($id > 0){

        //  Atualizar
        $sql = "UPDATE consulta SET

        data_consulta = '$data_consulta',
        id_paciente = $id_paciente,
        id_medico = $id_medico
        WHERE id = $id";

    //  se não tiver ID, tem que cadastrar:
    }   else{

        // inserir
        $sql = "INSERT INTO consulta(data_agendamento, data_consulta, id_paciente, id_medico) values ('$data_agendamento', '$data_consulta', $id_paciente, $id_medico)";
    }

    mysqli_query($conexao, $sql);

    //  se os dados não tiverem válidos, volta pra página:
        header('location: http://localhost/clinica_umbrela/?pagina=consulta');
    }

    else{
        //  retornar para a página de cadastro
        header('location: http://localhost/clinica_umbrela/?pagina=CadastraConsulta&erro=Dados inválidos!'); 
    }
 
?>