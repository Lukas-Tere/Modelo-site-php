<?php require_once('func.php');?>

<?php
    if(isset($_POST["btnIncluir"]) == true) {
        $login = $_POST['txtLogin']; 
        $email = $_POST['txtEmail'];   
        if(validUser() == 0){
                $nome = $_POST['txtNome'];
                $senha = $_POST['txtSenha'];
                cadastro($nome, $login, $senha, $email, $ativo);
            }else{
                echo 'deu merda';
            }
    }
?>