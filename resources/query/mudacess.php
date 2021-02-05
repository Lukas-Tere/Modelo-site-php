<?php 
include "app.php";
if(isset($_POST["btnAlterar"])) {
    $cn = openConnection();
    $id = $_GET["id"];
    $nivel = $_POST['nivel'];
    $sql = "SELECT * FROM  usuario WHERE id = $id";
    $q = mysqli_query($cn, $sql);
    if(mysqli_num_rows($q)> 0){
    
    $q = mysqli_query($cn , " UPDATE usuario SET acesso = '$nivel' WHERE id = $id;");
    header("location: ../../segundo.php");
    }
} else{
        $mensagem = "erro";
        header("location: location: ../../segundo.php?&alerta=$mensagem");
    }
    ?>