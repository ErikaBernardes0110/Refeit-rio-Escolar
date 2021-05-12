<?php
include_once '../dao/PessoaDAO.php';
include_once '../config/bdconfig.php';

if (isset($_GET['pront'])) {
    $pront = limpar($_GET['pront']);
}

$condicao = "where prontuario = '$pront'";
$resultado = consulta_pessoa('*', $condicao);
$linha = $resultado[0];
//var_dump($linha);
?>


<html>
    <head>
        <title> Refeitório Escolar </title>
        <meta  charset = " UTF-8 " >
        <meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" type="text/css"/>
    </head>
    <body background= "../img/refeicao.jpg">      
        <nav class="site-header" style="  background-color:  #90EE90;
             height: 40px;   color: #fff;
             padding-top: 8px;
             transition: ease-in-out color .5s;
             text-decoration: none">
            <div class="container ">
                <div class="row">
                    <a class="col-md-4" href="AdministradorVIEW.php">Voltar</a>
                </div>
            </div>
        </nav>
        <div class = "container" >
            <! - Forms ->
            <div  class = "row" >  
                <form  method="POST" action="../ctr/PessoaCTR6.php">
                    <div class="form" style="padding: 15px">
                        <div class="card" style="padding: 40px">
                            <div class="cardTop">
                                <img class="img" src="../img/Logo_IF.png" alt=""/>
                                <br>
                                <h3 class="title"><b>Atualizar Dados</b></h3>

                                <label for="nome" style="padding-right: 245px; color: slategrey">Nome:</label>
                                <input type="text" class="form-control" id="nome" name= 'nome' 
                                       aria-describedby="Nome da pessoa" value=" <?php echo $linha["nome"] ?>" placeholder="Nome">
                                <br>

                                <label for="senha" style="padding-right: 245px; color: slategrey">Prontuario:</label>
                                <input type="text" class="form-control" id="prontuario" name='prontuario' 
                                       aria-describedby="Prontuario" readonly value="<?php echo $linha["prontuario"] ?>" placeholder="Prontuario">
                                <br>

                                <label for="senha" style="padding-right: 245px; color: slategrey">Senha:</label>
                                <input type="password" class="form-control" id="senha" name='senha' 
                                       aria-describedby="Inserir sua senha" value="<?php echo $linha["senha"] ?>" placeholder="Senha">
                                <br>

                                <div class="card-group botao">
                                    <button type="submit" name="update" style=".card-group > button{background-image:linear-gradient(to left,forestgreen,green,greenyellow);
                                                         width: 90%;
                                                         border-radius: 30px;
                                                         padding: 10px;
                                                         color: white;
                                                         border: 0px;
                                                         outline: 0;
                                            }
                                            .botao button:hover{
                                                background-image:linear-gradient(to left,green,greenyellow,forestgreen);}">Salvar</button>
                                </div>

                                </form>
                            </div>
                        </div>
                        </body>
                        </html>

