<?php 
    include_once '../dao/PessoaDAO.php';
?> 
<html>
    <head>
        <title>Refeitório Escolar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" type="text/css"/>

    </head>
    <body background= "../img/refeicao.jpg">

        <nav class="site-header" style=" background-color:  #90EE90;
  height: 40px;   color: #fff;
  padding-top: 8px;
  transition: ease-in-out color .5s;  color: #000;
  text-decoration: none;">
            <div class="container ">
                <div class="row">
                     <a class="col-md-5" href="LoginPessoaVIEW.php"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Gnome-home.svg/1200px-Gnome-home.svg.png" class="h-auto d-inline-block align-top float-left rounded-circle" alt="" width="25px">
                    </a>
                    <a class="col-md-7" href="CardapioSemanalVIEW.php">Cardápio Semanal</a>
                   
                </div>
            </div>
        </nav>
        <form class="form" action="../ctr/PessoaCTR2.php">
            <div class="card" >
                <div class="cardTop">
                    <img class="img" src="../img/Logo_IF.png" alt=""/>
                    <h3 class="title"><b>Cardápio do dia</b></h3>
                    <br>
                    <p><h4>Quarta-Feira - (18/11/2020)</h4></p>
                <span class="card-group">
                    <center> 
                        <table border = 2>
                            <tr>
                                <td> <b><center>Almoço - 12:30</center></b></span>
                <br>
                <h4>Arroz, feijoada /c farofa e laranja.</h4>
                </td>
                            </tr>
                </table>   
                    </center>
                        </table>
                    </div>
                    <br>
                    <center>
                    <h4><b>Deseja almoçar hoje?</b></h4>
                    </center>
                    
                    <center>
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked> <b>Sim</b>
              <br>
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked> <b>Não</b>
                    </center>
                    <center>
                    <div class="card-group botao">
                        <br>
                        <button type="submit"  name="botao" style=".card-group>button{background-image:linear-gradient(to left,forestgreen,green,greenyellow);
                                width: 90%;
                                border-radius: 30px;
                                padding: 10px;
                                color: white;
                                border: 0px;
                                outline: 0; 
                                }
                                .botao button:hover{
                                background-image:linear-gradient(to left,green,greenyellow,forestgreen);}">Confirmar</button>
                    </div>
                    </center>
                </div>
            </div>

        </form>
    </body>
</html>




