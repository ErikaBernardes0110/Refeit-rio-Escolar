<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>Refeitório Escolar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" type="text/css"/>
        <link href="../css/style_1.css" rel="stylesheet" type="text/css"/>
       

    </head>
    <body background= "../img/refeicao.jpg">
        <nav class="site-header">
                      <div class="container ">
                <div class="row">
                    <a class="col-md-6" href="CozinheiraVIEW.php">Voltar</a>
                    <a class="col-md-6" href="CadastroCardapioSemanalVIEW.php">Cadastrar Cardápio Semanal</a>
                </div>
            </div>
                  </nav>
        <form class="form" action="../ctr/PessoaCTR3.php" style="padding-top: 70px">
            <div class="carddiario" style="   padding: 70px">
                <center>
                <div class="cardTop">
                    <img class="img" src="../img/Logo_IF.png" alt=""/>
                    <h3><b>Cadastrar almoço</b></h3>
                    <br>  
              <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Almoço do Dia"></textarea>
                        </td>
              <br><br>
              <div class="card-group botao">
                  <button type="submit" value="Submit" name="confirmar"> Confirmar </button>
                 
              </div>
                </div>
                </center>
        </div>    
        </form>
    </body>
</html>

