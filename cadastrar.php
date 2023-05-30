<?php
include('config.php');
switch ($_REQUEST["acao"]) {
    case 'cadastrar-usuario':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = ($_POST["senha"]);
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";
        $res = $conn->query($sql);

        if ($res == true) {

            echo "<script language='javascript' type='text/javascript'>
             alert('Usuário cadastrado com sucesso!');window.location
            .href='index.php';</script>";
        } else {
            echo ('Não foi possível Cadastrar!');
        }
        break;

    case 'cadastrar-cidade':
        $nome = $_POST["nome"];
        $estado = $_POST["estado"];
        $dataFund = $_POST["data-fundacao"];

        $sql = "INSERT INTO cidade (cidade, estado, fundacao) VALUES ('{$nome}', '{$estado}', '{$dataFund}')";
        $res = $conn->query($sql);

        if ($res == true) {

            echo "<script language='javascript' type='text/javascript'>
             alert('Cidade Cadastrada com sucesso!');window.location
            .href='dashboard.php?page=relatorio';</script>";
        } else {
            echo "<script language='javascript' type='text/javascript'>
             alert('Não foi possível cadastrar!');window.location
            .href='dashboard.php?page=relatorio';</script>";
        }
        break;

    case 'cadastrar-bairro':
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];

        $verificacao = "SELECT * from bairro where cidade = '{$cidade}'";
        $result = $conn->query($verificacao);
        $qtd = $result->num_rows;

        if ($qtd > 0) {
            $sql = "INSERT INTO bairro (bairro, cidade) VALUES ('{$bairro}', '{$cidade}')";
            $res = $conn->query($sql);

            if ($res == true) {

                echo "<script language='javascript' type='text/javascript'>
             alert('Bairro Cadastrado com sucesso!');window.location
            .href='dashboard.php?page=relatorio';</script>";
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>
             alert('Não foi possível cadastrar! Cadastre a cidade primeiro!');window.location
            .href='dashboard.php?page=relatorio';</script>";
        }



        break;

    case 'editar-usuario':
        $nome = $_POST["nome"];
        $id = $_REQUEST["id"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $sql = "UPDATE usuario SET 
        nome = '{$nome}',
        email = '{$email}', 
        senha = '{$senha}' 
        WHERE email = '$email'";

        $res = $conn->query($sql);

        if ($res == true) {

            echo "<script language='javascript' type='text/javascript'>
             alert('Usuário atualizado com sucesso!');window.location
            .href='dashboard.php';</script>";
        } else {
            echo ('Não foi possível editar!');
        }
        break;
    case 'excluir':
}
