<?php
include_once "../dao/PessoaDAO.php";
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title> Refeitório Escolar </title>
        <meta  charset = " UTF-8 " >
        <meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" type="text/css"/>

        <?php include_once '../config/bdconfig.php';
        ?>
    </head>
    <body background= "../img/refeicao.jpg">
        <nav class="site-header" style="  background-color:  #90EE90;
             height: 40px;   color: #fff;
             padding-top: 8px;
             transition: ease-in-out color .5s;
             text-decoration: none">
            <div class="container ">
                <div class="row">
                    <a class="col-md-4" href="LoginPessoaVIEW.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Gnome-home.svg/1200px-Gnome-home.svg.png" class="h-auto d-inline-block align-top float-left rounded-circle" alt="" width="25px"></a>
                </div>
            </div>
        </nav>
                <form  method="POST" action="../ctr/PessoaCTR1.php">
                    <div class="form" style="padding: 15px">
                        <div class="card" style="padding: 40px">
                            <div class="cardTop">
                                <img class="img" src="../img/Logo_IF.png" alt=""/>
                                <br>
                                <h3 class="title"><b>Cadastro</b></h3>

                                <br>
                                <label for="tipo" style="padding-right:170px; color: slategrey">Tipo de cadastro:</label>
                                <select class="form-control" id="tipo" name="tipo">
                                    <option valeu="vazio"></option>
                                    <option value="cozinheira">cozinheira</option>
                                    <option value="aluno">aluno</option>
                                </select>
                                <br>
                                <label for="nome" style="padding-right: 245px; color: slategrey">Nome:</label>
                                <input type="text" class="form-control" id="nome" name= 'nome' 
                                       aria-describedby="Nome da pessoa" placeholder="Nome">
                                <br>

                                <label for="senha" style="padding-right: 245px; color: slategrey">Prontuario:</label>
                                <input type="text" class="form-control" id="prontuario" name='prontuario' 
                                       aria-describedby="Inserir seu prontuario" placeholder="Prontuario">
                                <br>

                                <label for="senha" style="padding-right: 245px; color: slategrey">Senha:</label>
                                <input type="password" class="form-control" id="senha" name='senha' 
                                       aria-describedby="Inserir sua senha" placeholder="Senha">
                                <br>
                            
                                <div class="card-group botao">
                                    <button type="submit" name="cadastrar" style=".card-group > button{background-image:linear-gradient(to left,forestgreen,green,greenyellow);
                                                         width: 90%;
                                                         border-radius: 30px;
                                                         padding: 10px;
                                                         color: white;
                                                         border: 0px;
                                                         outline: 0;
                                            }
                                            .botao button:hover{
                                                background-image:linear-gradient(to left,green,greenyellow,forestgreen);}">Cadastrar</button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
