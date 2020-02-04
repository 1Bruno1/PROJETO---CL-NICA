<?php
//    requerir (require) arquivo de listagem
//    Comando require = só continua com o arquivo de listagem
//    Está requerindo o arquivo de listagem em listar.php
require 'src/consulta/listar.php';


//    ___________ MONTANDO A TABELA DOS PACIENTE EM HTML ___________

//    TAG = <table> = define o espaço da tabela

//    ___________ TABELA = CABEÇALHO + LINHAS + COLUNAS: ____________

//    | Cabeçalho da tabela = <th>   exemplo: NOME, ID, LOGIN, SENHA
//    | Coluna da tabela = <td>      exemplo: coluna com os NOMES, coluna com os IDS
//    | Linha da tabela = <tr> 
?>

<br><br><br>
<table id="tabela_consulta" class="table table-bordered  table-hover  table-striped" style="width: 100%"  id="tabela-consultas">

    <caption>

        <a id="botao_cadastrar" class="btn btn-sucess" href="?pagina=salvarConsulta">CADASTRAR</a>

    </caption>

<thead>

<tr>

    <th>Data_consulta</th>
    <th>Data_agendamento</th>
    <th>Paciente</th>
    <th>Médico</th>
    <th>Ações</th>

</tr>

</thead>

    <tbody>
    

<?php while ($linha = mysqli_fetch_assoc($tabelaConsultas)){ 
//    Fetch = Formata cada linha do while (linha = 0, linha = 1, ...) 

//    $linha vai ser um array:
//    $linha['id']
//    $linha['nome']
?>


<tr>
    <td>   <?= $linha['data_agendamento'] ?>   </td>
    <td>   <?= $linha['data_consulta'] ?>   </td>
    <td>   <?= $linha['nome_paciente']  ?>   </td>
    <td>   <?= $linha['nome_medico']  ?>   </td>
        <td>
            <a href="?pagina=salvarConsulta&id=<?= $linha['id'] ?>">EDITAR</a>
            <a href="src/consulta/excluir.php?id=<?= $linha['id'] ?>">EXCLUIR</a>
        </td>
</tr>



<?php } //   Fechando o While ?>

    </tbody>

</table>