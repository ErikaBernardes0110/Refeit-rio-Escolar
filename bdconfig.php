<?php

const DRIVE = "pgsql";
const ENDERECO = "localhost";
const PORTA = "5432";
const DBNAME = "projeto_refeitorio_escolar";
const USER = "postgres";
const PASSWORD = "postdba";

    function conexao() {
        try {
        $conexao = new PDO(DRIVE . ":host=" . ENDERECO . ";port=" . PORTA . ";dbname=" . DBNAME . ";user="
                . USER . ";password=" . PASSWORD);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        if ($conexao) {
            return $conexao;
        }
    }
    
 catch (PDOException $erro) {
    echo "Não foi possivel realizar a conexão <br>";
    echo $erro->getMessage();
}
    }
    
    function console($msg){
        echo "<script>";
        echo "console.log('" . $msg ."');";
        echo "</script>";
    }

    function consulta_Generica($campos = '*', $tabela, $add = '') {
    if (!empty($tabela))
        return false;
    $sql = "select $campos from $tabela $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function Max_id($campo, $tabela) {
    $conn = conexao();
    $stmt = $conn->prepare("select max($campo) as val from $tabela");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $valor = $resultado[0];
    return $valor['val'];
}

function limpar($campo, $int = false){
    if(!$int) {
        if(!empty($campo)) {
            return filter_var($campo, FILTER_SANITIZE_STRING);
        }
        return "";
    }else{
        if(!empty($campo)){
            return filter_var($campo, FILTER_SANITIZE_NUMBER_INT);
        }
        return 0;
    }
}

function consulta($sql){
    $conexao = conexao();
    $statement = $conexao->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

