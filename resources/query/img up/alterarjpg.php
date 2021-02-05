<?php
include "../app.php";
    if(isset($_POST["btnMudar"])==true) {
        $id = $_POST["ID"];
        $imagem = $_FILES["imagem"];
        $titulo = $_POST['txtTitulo'];
        $texto = $_POST['txtTexto'];
        $imgnome = $_POST['txtImg'];

if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
        $cn = openConnection();
 
       $sql ="UPDATE upload SET img = '$mysqlImg', titulo ='$titulo', texto ='$texto' ,nome_img='$imgnome' WHERE id =$id;";
        $executar = mysqli_query($cn, $sql);
        unlink($nomeFinal);
         
        $mensagem ="Imagem, Titulo, Texto e datas alterados com sucesso";
        header("location:../../../segundo.php?&alerta=$mensagem");
    } else {
            $mensagem ="Erro de sintax";
            header("location:../../../segundo.php?&alerta=$mensagem");
        }
}else{
            $mensagem ="Erro imagem invalida";
            header("location:../../../segundo.php?&alerta=$mensagem");
        }
    } 
    if(isset($_POST["btnExcluir"])==true) {
        $id = $_POST["txtID"];
        $conexao = openConnection();
        $id = mysqli_escape_string($conexao, $id);
        $sql = "DELETE FROM upload WHERE id =$id;";
        $q = mysqli_query($conexao, $sql);
        if(mysqli_affected_rows($conexao) > 0){
            $mensagem = "Conta deletada do sistema";
            header("location:../../../segundo.php?&alerta=$mensagem");
        }
        mysqli_close($conexao);
    }


?>