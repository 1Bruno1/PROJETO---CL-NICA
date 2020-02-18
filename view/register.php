
<div class="grade">

    <form action="src/autenticar_registro.php" class="formulario" method="POST">
        
        <input autocomplete="off" required id="input-lg" type="text" name="nome" placeholder="NOME">

        <input autocomplete="off" required id="input-lg" type="text" name="login" placeholder="LOGIN">

        <input required class="input" type="password" name="senha" id="input-lg" placeholder="SENHA">

            <?php if(isset($_GET['erro'])){ ?>

            <span class="error"> <?php echo $_GET['erro'] ?> </span

            <?php } ?>


        <input type="submit" value="CADASTRAR" id="input-botao">





        </form>


</div>






