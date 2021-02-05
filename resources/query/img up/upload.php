<?php    
include "../app.php";

 
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
 
       $inserir ="INSERT INTO upload VALUE (null,'$mysqlImg','$titulo','$texto','$imgnome');";
        $executar = mysqli_query($cn, $inserir);
        unlink($nomeFinal);
         
        header("location:../../../segundo.php");
    }
} 
else { 
    echo"Você não realizou o upload de forma satisfatória."; 
} 

?>