<!DOCTYPE html>

<html>
    <head>
        <title>Refeitório Escolar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/Style_2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body background ="../img/refeicao.jpg">
               <nav class="site-header" style="  background-color:  #90EE90;
  height: 40px;   color: #fff;
  padding-top: 8px;
  transition: ease-in-out color .5s;
  text-decoration: none">
            <div class="container ">
                <div class="row">
       
                    <a class="col-md-4" href="ConfirmacaoVIEW.php">Voltar</a>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class="card1" style="background-color: white;
    border-radius: 20px;
    width: 50%; 
    height: 100%;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px; 
    border-width: thin;
    border-style: solid;
    margin: auto;">
            <center>
                <img class="img" src="../img/Logo_IF.png" alt=""/>
                <h3><b>Cardápio Escolar</b></h3>

                <?php
                echo "<table>";
                $coluna = 1;
                $contC = 1;

                while ($contC <= $coluna) {

                    echo "<td width= 365px><h4>Segunda-Feira</h4></td>";
                    echo "<td width = 370px><h4>Terça-Feira</h4></td>";
                    echo "<td width = 370px ><h4>Quarta-Feira</h4></td>";
                    echo "<td width = 370px><h4>Quinta-Feira</h4></td>";
                    echo "<td width = 370px><h4>Sexta-Feira</h4></td>";
                    
                    $contC ++;
                   
                }
                
                echo "</table>";

                ?>
        
                <?php
                echo '<table border = "1">';
                $linha = 1;
                $contL = 1;
                while ($contL <= $linha) {
                    echo "<tr>";
                    $coluna = 5;
                    $contC = 1;
                    while ($contC <= $coluna) {
                        echo "<td><h5><b> Café da Manhã - 8:40 </b></h5>"
                        . "Bolacha e Suco</td>";
                        $contC ++;
                    }
                    echo "</tr>";
                    $contL ++;
                }
                echo "</table>";
                ?>
                <br>
                <?php
                echo '<table border = "1">';
                $coluna = 1;
                $contC = 1;

                while ($contC <= $coluna) {

                    echo "<td width = 128px><h5><b>Almoço - 12:30</b></h5>"
                    . "Arroz,feijão e frango assado<br></td>";
                    echo "<td width = 128px><h5><b>Almoço - 12:30</b></h5>"
                    . "Arroz,feijão e carne de panela<br></td>";
                    echo "<td width = 128px><h5><b>Almoço - 12:30</b></h5>"
                    . "Arroz,feijoada e farofa<br></td>";
                    echo "<td width = 128px><h5><b>Almoço - 12:30</b></h5>"
                    . "Arroz,feijão e kibe assado<br></td>";
                    echo "<td><h5><b>Almoço - 12:30</b></h5>"
                    . "Macarrão pizza e salada<br></td>";
                    $contC ++;
                }
                echo "</table>";
                ?>
                <br>
                <?php
                echo '<table border = "1">';
                $coluna = 1;
                $contC = 1;

                while ($contC <= $coluna) {

                    echo "<td width = 128px><h5><b>Café da Tarde - 15:10</b></h5>"
                    . "Fruta: Banana</td>";
                    echo "<td width = 128px><h5><b>Café da Tarde - 15:10</b></h5>"
                    . "Fruta: Abacaxi<br></td>";
                    echo "<td width = 128px><h5><b>Café da Tarde - 15:10</b></h5>"
                    . "Fruta: Melancia<br></td>";
                    echo "<td><h5><b>Café da Tarde - 15:10</b></h5>"
                    . "Fruta: Mamão<br></td>";
                    echo "<td width = 128px><h5><b>Café da Tarde - 15:10</b></h5>"
                    . "Fruta: Uva<br></td>";
                    $contC ++;
                }
                echo "</table>";
                
                ?>
                
        </div>
        </div>
    </center>

</body>
</html>

 