<?php
//    requerir (require) arquivo de listagem
//    Comando require = só continua com o arquivo de listagem
//    Está requerindo o arquivo de listagem em listar.php
require 'src/paciente/listar.php'; 


//    ___________ MONTANDO A TABELA DOS PACIENTE EM HTML ___________

//    TAG = <table> = define o espaço da tabela

//    ___________ TABELA = CABEÇALHO + LINHAS + COLUNAS: ____________

//    | Cabeçalho da tabela = <th>   exemplo: NOME, ID, LOGIN, SENHA
//    | Coluna da tabela = <td>      exemplo: coluna com os NOMES, coluna com os IDS
//    | Linha da tabela = <tr> 
?>

<br><br><br>
<table id="tabela_paciente" class="table table-bordered  table-hover  table-striped" style="width: 100%"  id="tabela-pacientes">

    <caption>

        <a id="botao_cadastrar" class="btn btn-sucess" href="?pagina=salvarPaciente">CADASTRAR</a>

    </caption>

<thead>

<tr>

    <th>Nome</th>
    <th>Data de nascimento</th>
    <th>CPF</th>
    <th>Ações</th>

</tr>

</thead>

    <tbody>
    


<?php while ($linha = mysqli_fetch_assoc($tabelaPacientes)){ 
//    Fetch = Formata cada linha do while (linha = 0, linha = 1, ...) 

//    $linha vai ser um array:
//    $linha['id']
//    $linha['nome']
?>


<tr>
    <td>   <?= $linha['nome'] ?>   </td>
    <td>   <?= $linha['nascimento'] ?>   </td>
    <td>   <?= $linha['cpf']  ?>   </td>
        <td>
            <a href="?pagina=salvarPaciente&id=<?= $linha['id'] ?>">EDITAR</a>
            <a href="src/paciente/excluir.php?id=<?= $linha['id'] ?>">EXCLUIR</a>
            
        </td>

</tr>



<?php } //   Fechando o While ?>

    </tbody>

</table>

