<!DOCTYPE html>      <!--   código gerado digitando = "html: 5"  -->
<html lang="pt-BR">  <!--   idioma do html   -->

<head>  <!-- comentário -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/datatables.min.css"> 
    
                                                    <!--   stylesheet são estilos diferentes do CSS  -->
                                                    <!--   precisa identificar a pasta e o arquivo   -->
                                                    <!--   exemplo: "nome da pasta/ nome do arquivo.css   -->
                                                    <!--   exemplo: "css/estilo.css   -->

    <title>CLÍNICA UMBRELLA</title>

</head>

<body>  
          <!-- abre o corpo do site (body) e deixa em aberto para adicionar coisas -->

    <header class="cabecalho">    <!-- o cabeçalho (header) precisa estar dentro do corpo (body) -->
    
        <nav class="navbar sticked-top">

        <div class="container-cabecalho">   <!-- criando uma classe para dividir melhor (div)  -->

            <a href="?pagina=home">

                <img id="img-logo" src="img/umbrella.png" alt="logo">
                <!--  Importando imagem usada na logo do site (no cabeçalho)  -->
                <h1 id="nome-logo">Clínica Umbrella</h1>
                <!-- h1 = título do cabeçalho  -->
            </a>

                <!--   id - (usado no css) usa pra dar um nome e diferenciar  -->
                <!--   src - lugar onde está a imagem. Exemplo: "Desktop/Imagem/Itachi.png"  -->
                <!--   alt - descrição  -->

                
                <?php if(isset($_SESSION['usuario-logado'])){ ?>

                    <a href="?pagina=medico">
                        <span id="titulo">Médico</span>
                    </a>

                    <a href="?pagina=paciente">
                        <span id="titulo-canto">Paciente</span>
                    </a>

                    <a href="?pagina=consulta">
                        <span id="titulo-canto">Consulta</span>
                    </a>

                    <a href="src/sair.php">
                    <span id="titulo-canto">Sair</span>
                    </a>


                <?php } else{ ?>
    
                    <a href="?pagina=login">

                        <span id="titulo">Login</span>

                    </a>

                    <a href="?pagina=register">

                        <span id="titulo-canto">Register</span>

                     </a>
            
                 <?php } ?>

    </div>

    </nav>

    </header>