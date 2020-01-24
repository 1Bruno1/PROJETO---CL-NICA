
<?php session_start(); ?>

<?php include_once 'header.php'; ?>


<div class="body-container">

<?php

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

switch ($pagina){

    case 'login':
        include_once('view/login.php');
        break;

    case 'home':
        include_once('view/home.php');
        break;

    case 'register':
        include_once('view/register.php');
        break;

    case 'medico':
        include_once('view/medico.php');
        break;

    case 'paciente':
        include_once('view/paciente.php');
        break;

    case 'consulta':
        include_once('view/consulta.php');
        break;

    case 'salvarPaciente':
        include_once("view/salvarPaciente.php");
    break;

    case 'salvarMedico':
        include_once("view/salvarMedico.php");
    break;

    case 'consulta':
        include_once("view/consulta.php");
    break;

    case 'salvarConsulta':
        include_once("view/salvarConsulta.php");
    break;

    default:
        include_once('view/home.php');
}

?>

</div>


<?php include_once 'footer.php'; ?>

