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
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" type="text/css">
        <link href="../css/style_1.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">

    </head>
    <body background="../img/refeicao.jpg">
       <nav class="site-header">
                      <div class="container ">
                <div class="row">
                    <a class="col-md-6" href="CozinheiraVIEW.php">Voltar</a>
                    <a class="col-md-6" href="CadastroCardapioDiarioVIEW.php">Cadastrar Cardápio Diário</a>
                </div>
            </div>
                  </nav>
        <form class="formcadas" action="../ctr/PessoaCTR4.php" style="padding-top: 20px"> 
            <div class="cardcsem" style="padding-left: 20px; padding-right: 20px"> 
                <div class="cardTopsem">
                    <center>
                   <img class="img" src="../img/Logo_IF.png" alt=""/>
                    </center>
                </div>
                <h3 class="title"><b>Cadastrar Cardápio Semanal</b></h3>
                <br>
               
                <table class="tabela">
                    
                    <tr class="tb">
                        
                        <td></td>
                        <td><b>Segunda-Feira</b></td>
                        <td><b>Terça-Feira</b></td>
                        <td><b>Quarta-Feira</b></td>
                        <td><b>Quinta-Feira</b></td>
                        <td><b>Sexta-Feira</b></td>
                    </tr>

                    <tr>
                        <td class="tb"><b>Café da Manhã - 08:40</b></td>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="tb"><b>Almoço - 12:30</b></td>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="tb"><b>Café da Tarde - 15:10</b></td>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        <td> <textarea id="w3review" name="w3review" rows="4" cols="25" placeholder="Informe o Cardápio"></textarea>
                        </td>
                    </tr>
                </table>
                <br>
               
                <div class="card-group botaocad botao" style="padding-left: 450px">
                    <button type="submit" value="Submit" name="Confirmar" style=" font-size: 15px;
   width: 250px;"> Confirmar </button>
                </div> 
            </div>
       </form> 
    </body>
</html>

