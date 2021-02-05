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
<div>
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
$ativo = $_SESSION['ativo'];
$acesso = $_SESSION['acesso'];
$nome = $_SESSION['nome'];

if ($_SESSION == true){
  include "navbaroff.php";
} else {
  include "navbaron.php";
}

$id = $_GET["id"];
if ($acesso == "uniqacessuserpd"){
if ($id == 1){
   include "resources/conteudocurso/baixo.php";
} else if ($id == 2){
    include"resources/conteudocurso/violao.php";
} else if ($id == 3){
    include"resources/conteudocurso/cavaco.php";
}
 else if ($id == 4){
    include"resources/conteudocurso/teclado.php";
} else if ($id == 5){
    include"resources/conteudocurso/guitarra.php";
} else if ($id == 6){
    include"resources/conteudocurso/viola.php";
} else {
    echo "Este Curso Está indisponível ou é invalido, volte na lista de Cursos e selecione o desejado";
}
} else if($acesso == "4d8cf5a2c76795ee8a1f675e32f188fc"){

?>
<a href="http://anxaife.epizy.com/resources/conteudocurso/baixo.php"><button class="btn btn-info">Curso Baixo</button></a>
<a href="http://anxaife.epizy.com/resources/conteudocurso/violao.php"><button class="btn btn-info">Curso Violão</button></a>
<a href="http://anxaife.epizy.com/resources/conteudocurso/cavaco.php"><button class="btn btn-info">Curso Cavaquinho</button></a>
<a href="http://anxaife.epizy.com/resources/conteudocurso/teclado.php"><button class="btn btn-info">Curso de Teclado</button></a>
<a href="http://anxaife.epizy.com/resources/conteudocurso/guitarra.php"><button class="btn btn-info">Curso de Guitarra</button></a>
<a href="http://anxaife.epizy.com/resources/conteudocurso/viola.php"><button class="btn btn-info">Curso de Viola</button></a>

<?php  }?>
</div>

</body>
<script type="text/javascript" src="resources/css/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="resources/css/popper.js"></script>
<script type="text/javascript" src="resources/css/bootstrap.js"></script>
<?php include 'resources/modais/alterarmodal.php';  ?>
<?php include 'resources/modais/logoutmodal.php';  ?>
