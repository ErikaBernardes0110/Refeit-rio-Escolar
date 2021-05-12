<?php session_start();
?>
<html>
    <head>
        <title> Refeitório Escolar </title>
        <meta  charset = " UTF-8 " >
        <meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
       
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
     
      <div class="card" style="padding-top: 10px">
          <center><h2><b>Tela Administrador</b></h2></center>
          <form  method="POST" action="../ctr/PessoaCTR6.php"></form>
<?php 
include_once "../dao/PessoaDAO.php";
include_once '../config/bdconfig.php';
 

$consulta = 'select nome as nome,prontuario as prontuario, senha as senha from pessoa';
$campos = 'nome as nome, prontuario as prontuario, senha as senha';
$resultado = consulta_pessoa($campos);

if (count($resultado) > 0) {
    $linha = $resultado[0];
}
?>
<?php include_once "../config/cabecalho.php"; ?>
<?php include_once "../config/nav.php"; ?>
          <br>
<! - Tabela de consulta ->
<div  class = "row" >
    <table   class = "table table-stripes" style="width: 100%">
        <thead  class = "thead-dark" style="width:  100%">
            <tr>
                <?php
                foreach ($linha as $coluna => $valor) {
                    echo '<th scope = "col">' . $coluna . '</th>';
                }
                ?>  
                <th scope = "col"> atualizar </th>
                <th scope = "col"> apagar aluno</th>
               <th scope = "col"> apagar cozinheira</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($resultado as $linha) {
                echo "<td padding-left = 50px>";
                echo "<td padding-left = 50px>";
                echo "<td padding-left = 50px>";
                echo "<td padding-left = 50px>";
                echo "<td padding-left = 50px>";
                echo "<td padding-left = 50px>";
                echo "<tr>";
                echo "<td width = 400px>" . $linha ['nome'] . "</td>";
                echo "<td width = 400px>" . $linha ['prontuario'] . "</td>";
                echo "<td width = 400px>" . $linha ['senha'] . "</td>";
                
                echo  "<td width = 400px>"
                            . "<a class = 'btn btn-success' href =../view/UpdatePessoaVIEW.php".
                                    "?pront=" . $linha['prontuario']. "> Atualizar </a> </td>" ;
                echo "<td width = 400px>"
                . "<a class = 'btn btn-danger' href =../ctr/PessoaCTR5.php?apagar="
                . $linha['prontuario'] . "> Apagar </a> </td>";
                echo "<td width = 400px>"
                . "<a class = 'btn btn-danger' href =../ctr/PessoaCTR7.php?apagar="
                . $linha['prontuario'] . "> Apagar </a> </td>";
                echo "</tr>";
            }
            ?>
         </tbody>
    </table>
</div>
            </div>
</body>
</html>
