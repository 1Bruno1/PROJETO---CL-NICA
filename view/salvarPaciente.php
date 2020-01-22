<div class="corpo">

        <form action="src/autenticar_login.php" method="POST">

        <div class="form-group">

            <input class="form-control" autocomplete="off" required id="input-nome" type="text" name="nome" placeholder="NOME">

        </div>

        <div class="form-group">

            <input required class="form-control" type="date" name="data_nascimento" id="input-data" placeholder="DATA DE NASCIMENTO">

        </div>

        <div class="form-group">

            <input required class="form-control" type="text" name="cpf" id="input-cpf" placeholder="CPF">

        </div>

            <?php if(isset($_GET['erro'])){ ?>

            <span class="error"> <?php echo $_GET['erro'] ?> </span>

            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn primary bg-sucess" type="submit" value="ENTRAR" id="input-botao">


            </form>


</div>