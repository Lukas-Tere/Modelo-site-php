<?php
        include "app.php"; 
        if(isset($_POST["btnLogin"])==true) {
        session_start();
        $login = $_POST["txtLogin"];
        $senha = md5($_POST["txtSenha"]);
        
        $conexao = openConnection();

        $sql = "SELECT*FROM usuario WHERE login = '$login' AND senha = '$senha'";

        $q = mysqli_query($conexao, $sql);
        if(mysqli_num_rows ($q) > 0 )
        {   $valida = mysqli_fetch_assoc($q);
            $_SESSION["id usuário"] = $valida['id'];
            $_SESSION["acesso"] = $valida["acesso"];
            $_SESSION["ativo"] = $valida["ativo"];
            $_SESSION["nome"] = $valida["nome"];
            $_SESSION['txtLogin'] = $login;
            $_SESSION['txtSenha'] = $senha;
            header('location: ../../segundo.php');
    
    } else {
        unset ($_SESSION['txtLogin']);
        unset ($_SESSION['txtSenha']);
        $mensagem = "Login ou Senha invalidos.";
        header("location: ../../index.php?&alerta=$mensagem");
   
  }}
 
?>
