<html>
    <head>
        <title>Refeitório Escolar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>

    <nav class="site-header" style="background-color: #90EE90;
         height: 40px;   color: #fff;
         padding-top: 8px;
         transition: ease-in-out color .5s;
         text-decoration: none">
        <div class="container ">
            <div class="row">
                <a class="col-md-4" href="../view/AdministradorVIEW.php">Voltar</a>
            </div>
        </div>
    </nav>
    <body background= "../img/refeicao.jpg">
        <div class="form1" style="padding: 30px">
            <center>
                <div class="card2" style=" box-shadow: 1px 1px 5px #ccc;
                     background-color: white;
                     border-radius: 10px;
                     border-width: thin;
                     border-style: solid;
                     width: 400px;
                     padding: 3px;
                     ">


<?php
include_once "../dao/PessoaDAO.php";

 if(isset($_POST['update'])) {
 if(atualizar_pessoa()){
        echo "<h3> Pessoa Atualizada com Sucesso </h3>";
 }else{
        echo "<h3> Registro Não Atualizado </h3>";
 }
 }
 ?>
            </center>
        </div>
    </div>
</body>
</head>
</html>


