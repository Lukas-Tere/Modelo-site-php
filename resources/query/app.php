<?php 
define("SERVIDOR","sql203.epizy.com");
define("USUARIO","epiz_25158688");
define("SENHA","N8VQA4Kvjo2");
define("BANCO_DADOS","epiz_25158688_banco_dados");

function openConnection()
{
    return mysqli_connect("sql203.epizy.com", "epiz_25158688", "N8VQA4Kvjo2", "epiz_25158688_banco_dados");
    //return mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO_DADOS) or die(mysqli_error());
}

function careString($cn, $registro)
{
    return mysqli_real_escape_string($registro);
}
function getUser()
{
        $nome = $_POST["txtNome"];
        $login = $_POST ["txtLogin"];
        $email = $_POST ["txtEmail"];
        $senha = $_POST ["txtSenha"];
        
        $nome = careString($cn, $nome );
        $login = careString($cn, $login);
        $email = careString($cn, $email);
        $senha = careString($cn, $senha);
        
}

function validUser()
{
        $conexao = openConnection();
        getUser();

        $validauser =mysqli_query($conexao, "SELECT * FROM usuario WHERE login = '{$login}'");
        $validaemail =mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '{$email}'");

        if(mysqli_num_rows($validauser) > 0){
            $mensagem = 'Login já existe no sistema';
            mysqli_close($conexao);
            header("Location: index.php?&alerta=$mensagem");

        } else if (mysqli_num_rows($validaemail) > 0){
            $mensagem = 'Email já existe no sistema';
            mysqli_close($conexao);
            header("Location: index.php?&alerta=$mensagem");
        } else {
            $nome = $_POST ["txtNome"];
            $senha = md5($_POST["txtSenha"]);
            $inserir = "INSERT INTO usuario VALUE(null, '$nome', '$login', '$senha', '$email', null);";
            $executar = mysqli_query($conexao, $inserir);
               if(mysqli_affected_rows($conexao) > 0){
                $id = mysqli_insert_id($conexao);
                mysqli_close($conexao);
                $mensagem = 'Cadastro Efetuado com Sucesso';
                header("Location: index.php?&alerta=$mensagem");
            }
    
            
        }


}

?>