<?php
    include "app.php";
    if(isset($_POST['btnTroca']) == true){
    $senha = md5($_POST["txtSenha"]);
    $confirma = md5($_POST["txtSenha2"]);
    
    if($senha == $confirma)
    {
        $valida = $_GET['recup'];
        $cn = openConnection();
        $sql =  "SELECT * FROM usuario WHERE valida = '$valida';";
        $q = mysqli_query($cn, $sql);
        
        if(mysqli_num_rows(q) > 0)
        {
            $q = mysqli_query($cn, "UPDATE usuario SET senha = '$senha', valida = null WHERE valida = '$valida';");
            $mensagem = "Senha trocada com sucesso";
            header("location:../../index.php?&alerta=$mensagem");
        }
        else
    {
        $mensagem = "Link expirado";
        header("location:../../index.php?&alerta=$mensagem");
    }
    }else
    {
        $mensagem = "Senhas não conferem";
        header("location:../../index.php?&alerta=$mensagem");
    }
}
?>