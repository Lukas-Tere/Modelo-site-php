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
<body>

<?php 
session_start();
if((!isset ($_SESSION['txtLogin']) == true) and (!isset ($_SESSION['txtSenha']) == true))
{
  unset($_SESSION['txtLogin']);
  unset($_SESSION['txtSenha']);
  }
if ($_SESSION == true){
    $logado = $_SESSION['txtLogin'];
    $id = $_SESSION["id usuário"];
    $acesso = $_SESSION['acesso'];
    include "navbaroff.php";
    include 'resources/modais/alterarmodal.php';
 include 'resources/modais/logoutmodal.php';
} else {
    include "navbaron.php";
}
?>

    <?php include "body.php" ?>
</body>
<?php include 'resources/modais/loginmodal.php' ?>
<?php include 'resources/modais/recupmodal.php' ?>
<?php include 'resources/modais/registromodal.php' ?>
<script type="text/javascript" src="resources/css/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="resources/css/popper.js"></script>
<script type="text/javascript" src="resources/css/bootstrap.js"></script>

<?php 
if(isset($_GET['alerta'])){
    echo "<script>alert('" . $_GET['alerta'] . "');</script>";
    
}
?>
<?php include "rodape.php" ?>
</html>