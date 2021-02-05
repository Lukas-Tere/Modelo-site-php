<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="resources/logo.png" type="image/x-icon">
    <link rel="icon" href="resources/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resources/css/tres.css" media="screen" />
    <title>Anxaife</title>
    </head>
    <?php 
session_start();
if((!isset ($_SESSION['txtLogin']) == true) and (!isset ($_SESSION['txtSenha']) == true))
{
  unset($_SESSION['txtLogin']);
  unset($_SESSION['txtSenha']);
  $mensagem = "Faça Login para continuar.";
  header("location:index.php?&alerta=$mensagem");
  }
$logado = $_SESSION['txtLogin'];
$id = $_SESSION["id usuário"];
$acesso = $_SESSION['acesso'];
$ativo = $_SESSION['ativo'];
$nome = $_SESSION['nome'];

if ($_SESSION == true){
  include "navbaroff.php";
} else {
  include "navbaron.php";
}
?>
<body>

    <h4 style="text-align: center;"><?php echo" Bem vindo $nome  <br>";?></h4>

 
<div style="margin-left: 19.375em"> <?php

if($acesso == "uniqacessuserpd"){
  include "aluno.php";
} else if ($acesso == "4d8cf5a2c76795ee8a1f675e32f188fc"){
  include "resources/query/table.php";
  include "upimg.php";
  include "resources/query/img up/listaInfoimg.php";
  include "resources/query/img up/alterarimg.php";
}


?>
</div>
</body>
<?php include 'resources/modais/alterarmodal.php';  ?>
<?php include 'resources/modais/logoutmodal.php';  ?>


<script type="text/javascript" src="resources/css/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="resources/css/popper.js"></script>
<script type="text/javascript" src="resources/css/bootstrap.js"></script>
 <?php 
if(isset($_GET['alerta'])){
    echo "<script>alert('" . $_GET['alerta'] . "');</script>";  
}
?>


</html>