
<?php require 'src/paciente/pesquisarPorid.php'; ?>

<div class="corpo">

        <form action="src/paciente/salvar.php"method="POST">


<?php if(isset($_GET['id'])){?>

    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

<?php } ?>

        <div class="form-group">

            <input class="form-control" autocomplete="off" required id="input-nome" type="text" name="nome" placeholder="<?= $paciente['nome']?>">

        </div>

        <div class="form-group">

            <input required class="form-control" type="date" name="nascimento" id="input-data" value="<?= $paciente['nascimento']?>">

        </div>

        <div class="form-group">

            <input required class="form-control" type="text" name="cpf" id="input-cpf" placeholder="<?= $paciente['cpf']?>">

        </div>

            <?php if(isset($_GET['erro'])){ ?>

            <span class="error"> <?php echo $_GET['erro'] ?> </span>

            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn primary bg-sucess" type="submit" value="SALVAR" id="botao_salvar">


            </form>


</div>