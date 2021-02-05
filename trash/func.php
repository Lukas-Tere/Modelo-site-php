<?php
    define("SERVIDOR","sql203.epizy.com");
    define("USUARIO","epiz_25158688");
    define("SENHA","N8VQA4Kvjo2");
    define("BANCO_DADOS","epiz_25158688_banco_dados");

    function openConnection()
{
        return mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO_DADOS) or die(mysqli_error());
}

function cadastro($nome, $login, $senha, $emai)
{
    $conexao = mysqli_connect("sql303.epizy.com", "epiz_25099509", "BWEJCTdwuU4WE", "epiz_25099509_CMS");
    $nome = mysqli_escape_string($conexao, $nome);
    $sql = "INSERT INTO usuario VALUE(null, '$nome', '$login', '$senha', '$email', null);";
    $q = mysqli_query($conexao, $sql);
    if(mysqli_affected_rows($conexao) > 0){
        $id = mysqli_insert_id($conexao);
        $mensagem = 'Cadastro Efetuado com Sucesso';
        header("Location: index.php?&alerta=$mensagem");
    }
    mysqli_close($conexao);
}

function validUser($login, $email)
{
        $sql = "SELECT*FROM usuario where login = '$login' and email = '$email';";
        $q = mysql_query(openConnection(),$sql);
        if(mysqli_num_rows($q) > 0){
            $b = 1;
        }else{
            $b = 0;
        }
        return $b;
}

    

    function closeConnection($cn)
{
        mysqli_close($cn);
}

?>