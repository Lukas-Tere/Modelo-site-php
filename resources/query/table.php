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
}
?>
<?php
if($acesso == "4d8cf5a2c76795ee8a1f675e32f188fc"){
} else if ($acesso == "uniqacessuserpd"){
    $mensagem = "não possui privilegios de acesso";
    header("location:../../index.php?&alerta=$mensagem");
}
?>
<?php
include "app.php";
$cn = openConnection();
$q = mysqli_query($cn, "SELECT * FROM usuario")
?>

<body>
    <div class="col-md-8" style="border: 1px solid black">
    <h4 style="font-italic; text-align: center;">Painel do Admin</h4>
    <table border= '1' class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Nivel de Acesso</th>
        </tr>
    </thead>
    <tbody>
    <?php while($dados = mysqli_fetch_array($q)){ ?>
    <tr>
    <td><?php echo $dados["id"]?></td>
    <td><?php echo $dados["nome"]?></td>
    <td><?php echo $dados["email"]?></td>
    <td>
    <form action="resources/query/mudacess.php?id=<?=$dados["id"]?>" method="POST">
        <select name="nivel" id="slctNivel">
            <option value="uniqacessuserpd"> Cliente </option>
            <option value="4d8cf5a2c76795ee8a1f675e32f188fc"> Administrador </option>
        </select>
        <input type="submit" name="btnAlterar" id="btnAlterar" value="Alterar" class="btn btn-info btnfirst">
    </form>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
</body>
</html>
