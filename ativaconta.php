<?php 
include "resources/query/app.php";
    $valida = $_GET["ativa"];
    $conexao = openConnection();
    $sql = "SELECT*FROM usuario WHERE valida = '$valida';";
    $q = mysqli_query($conexao, $sql);
    if(mysqli_num_rows ($q) > 0 )
        {   $valida = mysqli_fetch_assoc($q);
            $id = $valida['id'];
            $ativo = 1;
            $sql = "UPDATE usuario SET ativo = '$ativo' WHERE id =$id;";
            $q = mysqli_query($conexao, $sql);
            $mensagem = "Conta ativada.";
            header("location:index.php?&alerta=$mensagem");
    } else {
        $mensagem = "erro";
            header("location:index.php?&alerta=$mensagem");
    }
    
    mysqli_close($conexao);


  ?>