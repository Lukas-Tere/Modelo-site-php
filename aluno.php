
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
    $ativo = $_SESSION['ativo'];
    if($ativo == 0){
        $mensagem = "Ative a conta, email de ativação já enviado";
        header("location: index.php?&alerta=$mensagem");
    } else if ($ativo == 1){

    }
}
?>
<?php

include "resources/query/app.php";

$cn = openConnection();
$q = mysqli_query($cn, "SELECT * FROM upload");
?>
<div class="col-md-8 text-center" style="border: 1px solid black">
    <h4 style="font-italic">Listagem de Cursos disponiveis</h4>
    <table border= '1' class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Curso</th>
            <th scope="col">Material</th>
        </tr>
    </thead>
    <tbody>
    <?php while($dados = mysqli_fetch_array($q)){ ?>
    <tr>
    <td><?php echo $dados["id"]?></td>
    <td><?php echo $dados["titulo"]?></td>
    <td>
    <form action="conteudo.php?id=<?=$dados["id"]?>" method="POST">
        <input type="submit" name="btnAlterar" id="btnAlterar" value="Ver Material" class="btn btn-info btnfirst">
    </form>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>    
