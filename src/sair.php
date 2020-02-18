<?php

session_start();

session_destroy();

header('location: http://localhost/projeto_clinica/?pagina=home');

?>