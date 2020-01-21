<?php

include "conexao_com_banco.php";


    $login = isset($_POST['login']) ? $_POST['login'] : '';

    $senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';

    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';


        $sql = "SELECT * FROM `atendente`
                WHERE login = '$login' AND senha = '$senha'; ";


    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) == 1) {

        header('location: http://localhost/clinica_umbrela/?pagina=register&erro=Login já existente!');

    } else {

        $sql2 = "INSERT INTO atendente(nome, login, senha) values ('$nome', '$login', '$senha')";

        $executar = mysqli_query($conexao, $sql2);

        header('location: http://localhost/clinica_umbrela/?pagina=home');


    }







?>