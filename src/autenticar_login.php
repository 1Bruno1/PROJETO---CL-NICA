
<?php

//  _____________________ 1º CHAMA A CONEXÃO COM O BD _______________________

//  TRAZENDO A CONEXÃO COM O BD PARA CÁ (INCLUDE)
include "conexao_com_banco.php";

// ***************************************************************************


//  _____________________ 2º PEGA OS VALORES DO LOGIN E SENHA INSERIDOS NO BD ______________________

//  SE O LOGIN ESTIVER INSERIDO (ISSET), ENTÃO PEGA O VALOR DELE ($_POST), SENÃO RETORNE VAZIO (" ")
$login = isset($_POST['login']) ? $_POST['login'] : '';
//  SE A SENHA ESTIVER INSERIDA (ISSET), ENTÃO PEGA O VALOR DELA ($_POST), SENÃO RETORNE VAZIO (" ")
$senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';

// ***************************************************************************************************


//  ____________________  3º CONSULTA NO BD SE O LOGIN E A SENHA EXISTEM ______________________________

$sql = "SELECT * FROM `atendente`
             WHERE login = '$login' AND senha = '$senha' ";

// *****************************************************************************************************


//  ____ 4º USANDO A FUNÇÃO NUM ROWS, CASO RETORNE APENAS UMA LINHA (1), O LOGIN E A SENHA ESTÃO CERTOS _____

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    // header = cabeçalho para o HTTP identificar a página mais fácil

    session_start();

    $usuario = mysqli_fetch_assoc($resultado);

    $_SESSION['usuario-logado'] = true;
    $_SESSION['name'] = $usuario['nome'];

    mysqli_close($conexao);

    header('location: http://localhost/projeto_clinica/?pagina=home');

} else {
    header('location: http://localhost/projeto_clinica/?pagina=login&erro=Login ou Senha inválidos!');
}

// ************************************************************************************************************


?>