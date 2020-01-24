
<?php 

require 'src/consulta/pesquisarPorid.php'; 
require 'src/medico/listar.php'; 
require 'src/paciente/listar.php';

?>

<div class="corpo">

        <form action="src/consulta/salvar.php"method="POST">


<?php if(isset($_GET['id'])){?>

    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

<?php } ?>

        <div class="form-group">
            
            <input value="<?= $consulta['data_consulta'] ?> required class="form-control" type="date" name="data_consulta" placeholder="<?= $consulta['data_consulta']?>">

        </div>

        <div class="form-group">

            <select class="form-control" name="id_paciente" id="select_paciente">
                <?php while ($paciente = mysqli_fetch_assoc($tabelaPacientes)){ ?>
                    <option value="<?= $paciente['id'] ?>"><?= $paciente['nome'] ?></option>

                <?php } ?>
            </select>
        </div>


        <div class="form-group">

        <select class="form-control" name="id_medico" id="select_medico">

             <?php while ($medico = mysqli_fetch_assoc($tabelaMedicos)) { ?>
                <option value="<?= $medico['id'] ?>"><?= $medico['nome'] ?></option>
            <?php } ?>
        </select>
        </div>

        </div>

            <?php if(isset($_GET['erro'])){ ?>

            <span class="error"> <?php echo $_GET['erro'] ?> </span>

            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn primary bg-sucess" type="submit" value="SALVAR" id="botao_salvar">


            </form>


</div>