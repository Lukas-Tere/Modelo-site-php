
<?php 
session_start();
if((!isset ($_SESSION['txtLogin']) == true) and (!isset ($_SESSION['txtSenha']) == true))
{
  unset($_SESSION['txtLogin']);
  unset($_SESSION['txtSenha']);
  header("location:index.php");
  }
if ($_SESSION == true){
    $logado = $_SESSION['txtLogin'];
    $id = $_SESSION["id usuário"];
    $acesso = $_SESSION['acesso'];
} 
?>
<?php

if ($acesso == "4d8cf5a2c76795ee8a1f675e32f188fc"){

} else if($acesso == "uniqacessuserpd"){
  $mensagem ="Não possui privilégios de administrador";
  header("location:index.php?&alerta=$mensagem");
}
?>

<div class="col-md-8" style="border: 1px solid black">
        <form action="resources/query/img up/upload.php" method="POST" enctype="multipart/form-data">
        <h5>Upload de imagens</h5> <br>
            <label for="imagem">Imagem:</label>
            <input type="file" name="imagem"/>
            <br/>
                   <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" id="txtImg" name="txtImg" required class="form-control" placeholder="Nome da imagem" required maxlength="20">
                            </div>
                        </div>
            <div class="form-group text-center">
                <textarea id="txtTitulo" name="txtTitulo" maxlength="100" placeholder="escreva o titulo" class="form-control" required></textarea> <br>
                <textarea id="txtTexto" name="txtTexto" maxlength="2000" placeholder="Escreva o texto" class="form-control" required></textarea> <br>
            <input type="submit" value="Enviar" class="btn btn-info btnfirst"/>
            </div>
        </form>
</div>