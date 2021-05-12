<?php 
include_once '../dao/PessoaDAO.php';
?>

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
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <?php include_once '../config/bdconfig.php';

        ?>
    </head>
    <body background="../img/refeicao.jpg" >
        <form class="form" method="POST" action="../ctr/PessoaCTR.php">
            <div class="card">
                <div class="cardTop">
                    <img class="img" src="../img/Logo_IF.png" alt=""/>
                    <h2 class="title">Login</h2>
                    <p>Cardápio Escolar</p>
                    <div class="card-group">
                        <label style="padding-right: 210px; color: slategrey">Usuário:</label>
                        <input type="text" name="prontuario" placeholder="Digite seu prontuário" required>
                    </div>
                    <br>
                    <div class="card-group">
                        <label style="padding-right: 220px; color: slategrey; ">Senha:</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <br>
                    <div class="card-group1">
                        <label> <input type="checkbox"> Lembre-me</label>
                    </div>
                    <br> 
                    <div class="card-group botao" >
                           
                        <button type="submit" name="login" style=".card-group > button{background-image:linear-gradient(to left,forestgreen,green,greenyellow);
                                width: 250px;
                                border-radius: 30px;
                                padding: 20px;
                                color: white;
                                border: 0px;
                                outline: 0;
                                
                                }
                               .botao button:hover{
    background-image:linear-gradient(to left,green,greenyellow,forestgreen);}">Acessar</button>
  
                    </div>
                      <br>
                      <p class="link">Ainda não tem conta?
                                   <button type="submit"><a href="../view/CadastroPessoaVIEW.php" class="login">Cadastre-se</a></button>
                  </p>
                </div>
            </div>

        </form>

    </body>
</html>
