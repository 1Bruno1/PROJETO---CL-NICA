<?php

//   Conexão com banco
require '../conexao_com_banco.php';


//  receber dados POST
$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$area = isset($_POST['area']) ? $_POST['area'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';


//  Validar dados (verificar se ta vazio)
if (!empty($nome) && !empty($area) && !empty($email)){

    //  se o ID foi enviado...
    if ($id > 0){

        //  Atualizar
        $sql = "UPDATE medico SET

         nome = '$nome',
         area = '$area',
         email = '$email'

        WHERE id = $id";

    //  se não tiver ID, tem que cadastrar:
    }   else{

        // inserir
        $sql = "INSERT INTO medico(nome, area, email) values ('$nome', '$area', '$email')";
    }

    mysqli_query($conexao, $sql);

    //  se os dados não tiverem válidos, volta pra página:
        header('location: http://localhost/clinica_umbrela/?pagina=medico');
    }

    else{
        //  retornar para a página de cadastro
        header('location: http://localhost/clinica_umbrela/?pagina=CadastraMedico&erro=Dados inválidos!'); 
    }
 
?>