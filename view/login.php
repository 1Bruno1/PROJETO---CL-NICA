
<h1>LOGIN</h1>
<div class="grade">
<form action="src/autenticar_login.php" method="POST">

    <label for="imput_login">Login</label>
    <input autocomplete="off" required class="input" type="text" name="login">


    <label for="input_senha">Senha</label>
    <input required class="input" type="password" name="senha" id="input_Senha">


    <?php if(isset($_GET['erro'])){ ?>

            <span class="error"> <?php echo $_GET['erro'] ?> </span>

    <?php } ?>

    <input style="float: right; margin-top: 20px" class="botao" type="submit" value="Fazer login">


</form>


</div>
