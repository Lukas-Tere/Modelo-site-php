<?php
    include "app.php";
    $email = $_POST['txtEmail'];
    $cn = openConnection();
    $randon = md5(uniqid(rand()));
    $q = mysqli_query($cn, "UPDATE usuario SET valida = '$randon' WHERE email= '$email';");
    $q = mysqli_query($cn, "SELECT*FROM usuario WHERE email = '$email';");
    if(mysqli_num_rows($q) > 0)
    {
        $valida = mysqli_fetch_assoc($q);
        $nome = $valida['nome'];
        $id = $valida['valida'];
        $link = "anxaife.epizy.com/resources/query/trocasenha.php?&recup=$id";
        include "ativaemail.php";
        $mensagem = "E-mail de troca de senha enviado";
        header("location:../../index.php?&alerta=$mensagem");
    }else
    {
        $mensagem = "E-mail inexistente";
        header("location:../../index.php?&alerta=$mensagem");
    }
    
?>