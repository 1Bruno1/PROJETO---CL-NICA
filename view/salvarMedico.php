<?php require 'src/medico/pesquisarPorid.php'; ?>

<div class="corpo2">

        <form action="src/medico/salvar.php"method="POST">


<?php if(isset($_GET['id'])){?>

    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

<?php } ?>

        <div class="form-group">

            <input class="form-control" autocomplete="off" required id="input-nome" type="text" name="nome" placeholder="<?= $medico['nome']?>">

        </div>

        <div class="form-group">

        <input required class="form-control" type="select" name="area" id="input-area" placeholder="<?= $medico['area']?>">

        </div>

        <div class="form-group">

            <input required class="form-control" type="email" name="email" id="input-email" placeholder="<?= $medico['email']?>">

        </div>

            <?php if(isset($_GET['erro'])){ ?>

            <span class="error"> <?php echo $_GET['erro'] ?> </span>

            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn primary bg-sucess" type="submit" value="SALVAR" id="botao_salvar">


            </form>


</div>