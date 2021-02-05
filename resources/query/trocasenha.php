<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method='POST'>
    <input type="password" id = 'txtSenha' name = 'txtSenha' placeholder = 'Digite a nova senha' require>
    <input type="password" id = 'txtSenha2' name = 'txtSenha2' placeholder = 'Confirme sua senha' require>
    <input type="submit" value = 'Alterar senha' name = 'btnTroca' id= 'btnTroca'>
    </form>
    <a href="../../index.php">Voltar para o inicio</a>
</body>
</html>
<?php
    include "app.php";
    if(isset($_POST['btnTroca']) == true){
    $senha = md5($_POST["txtSenha"]);
    $confirma = md5($_POST["txtSenha2"]);
    
    if($senha == $confirma)
    {  $valida = $_GET['recup'];
        $cn = openConnection();
        $sql =  "SELECT * FROM usuario WHERE valida = '$valida';";
        $q = mysqli_query($cn, $sql);
        if(mysqli_num_rows($q) > 0)
        {
            $q = mysqli_query($cn, "UPDATE usuario SET senha = '$senha', valida = null WHERE valida = '$valida';");
            $mensagem = "Senha trocada com sucesso";
            header("location:../../index.php?&alerta=$mensagem");
        }else
    {
        $mensagem = "link expirado";
        header("location:../../index.php?&alerta=$mensagem");
    }
    }else
    { 
        $mensagem = "Senhas não conferem";
        header("location:../../index.php?&alerta=$mensagem");
    }
}
?>
