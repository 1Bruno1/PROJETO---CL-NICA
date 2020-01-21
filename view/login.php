
<div class="grade">

        <form action="src/autenticar_login.php" class="formulario" method="POST">

            <input autocomplete="off" required id="input-lg" type="text" name="login" placeholder="LOGIN">

            <input required class="input" type="password" name="senha" id="input-lg" placeholder="SENHA">


            <?php if(isset($_GET['erro'])){ ?>

            <span class="error"> <?php echo $_GET['erro'] ?> </span>

            <?php } ?>

            <input style="float: right; margin-top: 20px" class="botao" type="submit" value="ENTRAR" id="input-botao">


            </form>


</div>
