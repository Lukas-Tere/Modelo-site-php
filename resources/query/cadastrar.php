<?php
include "app.php";
    if(isset($_POST["btnCad"])==true) {
        $login = $_POST ["txtLogin"];
        $email = $_POST ["txtEmail"];
         
        $conexao = openConnection();

        $validauser =mysqli_query($conexao, "SELECT*FROM usuario WHERE login = '{$login}'");
        $validaemail =mysqli_query($conexao, "SELECT*FROM usuario WHERE email = '{$email}'");

        if(mysqli_num_rows($validauser) > 0){
            $mensagem = 'Login já existe no sistema';
            header("Location: ../../index.php?&alerta=$mensagem");

        } else if (mysqli_num_rows($validaemail) > 0){
            $mensagem = 'Email já existe no sistema';
            header("Location: ../../index.php?&alerta=$mensagem");

        } else {
        $nome = $_POST ["txtNome"];
        $senha = md5($_POST["txtSenha"]);
        $acesso = "uniqacessuserpd";
        $nome = mysqli_escape_string($conexao, $nome);
        $valida = md5(uniqid(rand()));
        $inserir = "INSERT INTO usuario VALUE(null, '$nome', '$login', '$senha', '$email', '0', '$acesso', '$valida');";
        $executar = mysqli_query($conexao, $inserir);
           if(mysqli_affected_rows($conexao) > 0){
               
               $link = "anxaife.epizy.com/ativaconta.php?ativa=$valida";
               include "ativaemail.php";
            $id = mysqli_insert_id($conexao);
            $mensagem = 'Cadastro Efetuado com Sucesso e Email de confirmação enviado';
            header("Location: ../../index.php?&alerta=$mensagem");
        }

        
    } mysqli_close($conexao);
    
    }
 
?>