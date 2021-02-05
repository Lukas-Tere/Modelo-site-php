<?php
        
        if(isset($_POST["btnLogin"])==true) {
        session_start();
        $login = $_POST["txtLogin"];
        $senha = md5($_POST["txtSenha"]);
        $conexao = mysqli_connect("sql303.epizy.com", "epiz_25099509", "BWEJCTdwuU4WE", "epiz_25099509_CMS");

        $sql = "SELECT*FROM usuario WHERE login = '$login' AND senha = '$senha'";

        $q = mysqli_query($conexao, $sql);
        if(mysqli_num_rows ($q) > 0 )
        {   $iduser = mysqli_fetch_assoc($q);
            $_SESSION["id usuário"] = $iduser['id'];
            $_SESSION['txtLogin'] = $login;
            $_SESSION['txtSenha'] = $senha;
            header('location:foicebook.php');
    
    } else {
        unset ($_SESSION['txtLogin']);
        unset ($_SESSION['txtSenha']);
        $mensagem = "Login ou Senha invalidos.";
        header("location:index.php?&alerta=$mensagem");
   
  }}
 
?>
