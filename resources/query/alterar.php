<?php
include "app.php";
    if(isset($_POST["btnSalvar"])==true) {
        $id = $_GET["id"];
        $nome = $_POST ["txtNome"];
        $login = $_POST ["txtLogin"];
        $senha = md5($_POST["txtSenha"]);
        $email = $_POST ["txtEmail"];
        $conexao = openConnection();
        $id = mysqli_escape_string($conexao, $id);
        $nome = mysqli_escape_string($conexao, $nome);
        $sql = "UPDATE usuario SET nome = '$nome', login ='$login', senha='$senha', email='$email' WHERE id =$id;";
        $q = mysqli_query($conexao, $sql);
        if(mysqli_affected_rows($conexao) > 0){
            $mensagem ="Informações da conta alteradas, favor efetue o login novamente";
            header("location:../../index.php?&alerta=$mensagem");
        }
        mysqli_close($conexao);
    } 
    if(isset($_POST["btnExcluir"])==true) {
        $id = $_GET["id"];
        $conexao = openConnection();
        $id = mysqli_escape_string($conexao, $id);
        $sql = "DELETE FROM usuario WHERE id =$id;";
        $q = mysqli_query($conexao, $sql);
        if(mysqli_affected_rows($conexao) > 0){
            $mensagem = "Conta deletada do sistema";
            header("location:../../index.php?&alerta=$mensagem");
        }
        mysqli_close($conexao);
    }


?>