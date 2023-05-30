<?php
session_start();

    include('config.php');
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    
    $sql = "SELECT * FROM usuario WHERE email = '{$email}' and senha = '{$senha}'";
    $res = $conn -> query($sql);
    $row = $res -> fetch_object();
    $qtd = $res ->  num_rows;

      if ($qtd > 0){
        $nome = $row -> nome;
        $email = $row -> email;
        $id = $row -> id;
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;
        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        header("Location:dashboard.php");
        
        

      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
      }
      
      
  
