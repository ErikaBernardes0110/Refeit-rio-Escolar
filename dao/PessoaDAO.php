<?php

include_once '../config/bdconfig.php';

function login() {
    $conexao = conexao();
    $pront = "";
    $senha = "";
    if (isset($_POST['prontuario'])) {
        $pront = filter_input(INPUT_POST, 'prontuario', FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['senha'])) {
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    }
    if (!empty($pront) && !empty($senha)) {
        try {
            $sql = 'select * from pessoa where prontuario = (?) and senha = (?)';
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $pront);
            $statement->bindParam(2, $senha);
            $statement->execute();
            if ($statement->rowCount() > 0) {
                str_split($pront, 2);
                $valida = $pront[0] . $pront[1];
                if ($valida == "Vp") {
                    header("Location: ../view/ConfirmacaoVIEW.php");
                } else if ($valida == "Cp") {
                    header("Location: ../view/CozinheiraVIEW.php");
                } else if ($valida == "Ad") {
                    header("Location: ../view/AdministradorVIEW.php");
                }
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }
    return false;
}

function inicia_sessao() {
    $_SESSION['prontuario'] = $pront;
    $_SESSION['senha'] = $senha;
    header("Location: LoginPessoaVIEW.php");
}

function inserir_pessoa() {
    $conexao = conexao();
    $tipo = "";
    $nome = "";
    $senha = "";
    $pront = "";

    if (isset($_POST['tipo'])) {
        $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['nome'])) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['prontuario'])) {
        $pront = filter_input(INPUT_POST, 'prontuario', FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['senha'])) {
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    }
    if (!empty($nome)) {
        try {
            $sql = 'insert into public.pessoa(nome,prontuario,senha) values (?,?,?)';
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome);
            $statement->bindParam(2, $pront);
            $statement->bindParam(3, $senha);
            $statement->execute();
            if ($statement->rowCount() > 0) {
//                    $id = $conexao->lastInsertId()
                if ($tipo == 'cozinheira') {
                    inserir_cozinheira($pront);
                } else {
                    inserir_aluno($pront);
                }
            }
            return true;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }
    return false;
}

function inserir_aluno($prontuario) {
    $conexao = conexao();
    try {
        $sql = 'insert into public.aluno(prontuario) values (?)';
        $statement = $conexao->prepare($sql);
        $statement->bindParam(1, $prontuario);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        }
    } catch (Exception $exc) {
        echo $exc->getMessage();
        return false;
    }
    return false;
}

function inserir_cozinheira($prontuario) {
    $conexao = conexao();
    try {
        $sql = 'insert into public.cozinheira(prontuario) values (?)';
        $statement = $conexao->prepare($sql);
        $statement->bindParam(1, $prontuario);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        }
    } catch (Exception $exc) {
        echo $exc->getMessage();
        return false;
    }
    return false;
}

function consulta_pessoa($campos = '*', $add = '') {
    $sql = "select $campos from pessoa $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function apagar_aluno($pront) {
    if (!empty($pront)) {
        try {
            $conexao = conexao();
            $sql = 'Delete From aluno where prontuario=?;';
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $pront, PDO::PARAM_STR);

            $statement->execute();
            if ($statement->rowCount() > 0) {
                return apagar_pessoa($pront);
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }
    return false;
}

function apagar_cozinheira($pront) {
    if (!empty($pront)) {
        try {
            $conexao = conexao();
            $sql = 'Delete From cozinheira where prontuario=?;';
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $pront, PDO::PARAM_STR);

            $statement->execute();
            if ($statement->rowCount() > 0) {
                return apagar_pessoa($pront);
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }
    return false;
}

function apagar_pessoa($pront) {
    if (!empty($pront)) {
        try {
            $conexao = conexao();
            $sql = 'Delete From pessoa where prontuario=?;';
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $pront, PDO::PARAM_STR);

            $statement->execute();
            if ($statement->rowCount() > 0) {
                return true;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }
    return false;
}

function atualizar_pessoa() {
    $conexao = conexao();
    $nome = "";
    $pront = "";
    $senha = "";

    $nome = limpar($_POST['nome']);
    $pront = limpar($_POST['prontuario']);
    $senha = limpar($_POST['senha']);

    if (!empty($pront) && !empty($nome)) {
        try {
            $sql = 'update public.pessoa set nome=?, senha=? where prontuario=?;';

            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome);
            $statement->bindParam(2, $senha);
            $statement->bindParam(3, $pront);
            $statement->execute();
            if ($statement->rowCount() > 0) {
                return true;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
    }
    return false;
}

function Confirmacao() {
    $conexao = conexao();
    $resposta = "";
    $pront = "";
    
     if (isset($_POST['prontuario'])) {
        $pront = filter_input(INPUT_POST, 'prontuario', FILTER_SANITIZE_STRING);
    }
     if (isset($_POST['idcardapio'])) {
        $resposta = filter_input(INPUT_POST, 'idcardapio', FILTER_SANITIZE_STRING);
    }
    
    try {
        $sql = 'insert into CardapioConfirmado (idcardapio,prontuario) values(?,?)';
        $statement = $conexao->prepare($sql);
        $statement->bindParam(1, $resposta);
        $statement->bindParam(2, $pront);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        }
    } catch (Exception $exc) {
        echo $exc->getMessage();
        return false;
    }
    return false;
}
