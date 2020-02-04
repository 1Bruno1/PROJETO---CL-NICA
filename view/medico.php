<?php
//    requerir (require) arquivo de listagem
//    Comando require = só continua com o arquivo de listagem
//    Está requerindo o arquivo de listagem em listar.php
require 'src/medico/listar.php'; 


//    ___________ MONTANDO A TABELA DOS PACIENTE EM HTML ___________

//    TAG = <table> = define o espaço da tabela

//    ___________ TABELA = CABEÇALHO + LINHAS + COLUNAS: ____________

//    | Cabeçalho da tabela = <th>   exemplo: NOME, ID, LOGIN, SENHA
//    | Coluna da tabela = <td>      exemplo: coluna com os NOMES, coluna com os IDS
//    | Linha da tabela = <tr> 
?>

<br><br><br>
<table id="tabela_medico" class="table table-bordered  table-hover  table-striped" style="width: 100%"  id="tabela-medicos">

    <caption>

        <a id="botao_cadastrar" class="btn btn-sucess" href="?pagina=salvarMedico">CADASTRAR</a>

    </caption>

<thead>

<tr>

    <th>Nome</th>
    <th>Área</th>
    <th>Email</th>
    <th>Ações</th>

</tr>

</thead>

    <tbody>
    
    


<?php while ($linha = mysqli_fetch_assoc($tabelaMedicos)){ 
//    Fetch = Formata cada linha do while (linha = 0, linha = 1, ...) 

//    $linha vai ser um array:
//    $linha['id']
//    $linha['nome']
?>


<tr>
    <td>   <?= $linha['nome'] ?>   </td>
    <td>   <?= $linha['area'] ?>   </td>
    <td>   <?= $linha['email']  ?>   </td>
        <td>
            <a href="?pagina=salvarMedico&id=<?= $linha['id'] ?>">EDITAR</a>
            <a href="src/medico/excluir.php?id=<?= $linha['id'] ?>">EXCLUIR</a>
            
        </td>

</tr>



<?php } //   Fechando o While ?>

    </tbody>

</table>