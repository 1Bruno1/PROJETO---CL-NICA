<?php

//   Conexão com banco
require 'src/conexao_com_banco.php';


//  receber dados POST
$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';


//  Validar dados (verificar se ta vazio)
if (!empty ($nome) && !empty($nascimento) && !empty($cpf)){

    //  se o ID foi enviado...
    if ($id > 0){

        //  Atualizar
        $sql = "UPDATE paciente SET

         nome = '$nome',
         nascimento = '$nascimento',
         cpf = '$cpf',

        WHERE id = $id";

    //  se não tiver ID, tem que cadastrar:
    }   else{

        // inserir
        $sql = "INSERT INTO paciente(nome, nascimento, senha) values ('$nome', '$nascimento', '$cpf')";
    }

    mysqli_query($conexao, $sql);
    
    //  se os dados não tiverem válidos, volta pra página:
    header('location: http://localhost/clinica_umbrela/?pagina=paciente');
    }

    else{
        //  retornar para a página de cadastro
        header('location: http://localhost/clinica_umbrela/?pagina=CadastraPaciente&erro=Dados inválidos!'); 
    }
 
?>