<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="resources/logo.png" type="image/x-icon">
    <link rel="icon" href="resources/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dois.css" media="screen" />
    <title>Anxaife</title>
    </head>
    <?php 
session_start();
if((!isset ($_SESSION['txtLogin']) == true) and (!isset ($_SESSION['txtSenha']) == true))
{
  unset($_SESSION['txtLogin']);
  unset($_SESSION['txtSenha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['txtLogin'];
$id = $_SESSION["id usuário"];
?>
<body>
    <div id="header"></div>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
    <a class="navbar-brand" href="index.php">
        <img src="resources/logoverde.png"  class="d-inline-block align-top">
        anxaife</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse navmarg" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">O início</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Nossos Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Nosso Contato</a>
        </li>
        </ul>
    </div>
        <button type="button" class="btn btn-primary btnfirst" data-toggle="modal" data-target="#logout">
    Deslogar
</button>
        <button type="button" class="btn btn-primary btnfirst" data-toggle="modal" data-target="#alterar" style="margin-left: 10px;">
            Minha Conta
        </button>
    </nav>


    <table>
  <tr>
    <td>
    <?php
  echo" Bem vindo $logado  <br>";
  echo "seu id é $id";
  ?>
    </td>
  </tr>
 
</table>
</body>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="popper.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
 <?php 
if(isset($_GET['alerta'])){
    echo "<script>alert('" . $_GET['alerta'] . "');</script>";
    
}
?>
<footer>
    <a href="index.html" id="selogp">Enxaife Group &#128190; &#128187; &#127911;</a>
    <p>Todos os direitos reservados &copy; 2020</p></p>
</footer>
<div class="modal" id="alterar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-body" id="form">
                    <form method="POST" action="alterar.php?id=<?=$id?>">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" id="txtNome" name="txtNome" required class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" id="txtEmail" name="txtEmail" required class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" id="txtLogin" name="txtLogin" required class="form-control" placeholder="Login">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="password" id="txtSenha" name="txtSenha" required class="form-control" placeholder="Senha" maxleingth="8">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="alterar" name="btnSalvar" id="btnSalvar" class="btn btn-primary">
                            <input type="reset" value="Limpar" class="btn btn-secondary">
                        </div>
                        <div style="text-align: center">
                        <input type="submit" name="btnExcluir" id="btnExcluir" value="excluir conta" class="btn btn-secondary">
                        </div>
                    </form>
                </div>
                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        tem certeza que deseja sair?
      </div>
      <div class="modal-footer">
        <a href="logout.php"><button type="button" class="btn btn-primary">Sim</button></a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">não</button>
      </div>
    </div>
  </div>
</div>
</html>