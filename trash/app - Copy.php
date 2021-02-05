<?php
    define("SERVIDOR","sql203.epizy.com");
    define("USUARIO","epiz_25158688");
    define("SENHA","N8VQA4Kvjo2");
    define("BANCO_DADOS","epiz_25158688_banco_dados");

    function openConnection()
    {
        return mysqli_connect("sql203.epizy.com", "epiz_25158688", "N8VQA4Kvjo2", "epiz_25158688_banco_dados") or die(mysqli_error());
    }

    function closeConnection($cn)
    {
        mysqli_close($cn);
    }

    function insert($cn, $sql)
    {
        $id = NULL;
        mysqli_query($cn, $sql) or die(mysqli_error($cn));
        if(mysql_affected_rows($cn) > 0)
        {
            $id = mysqli_insert_id($cn);
        }
        return $id;
    }

    function param($cn, $valor)
    {
        return mysqli_real_escape_string($cn, $valor)
    }

    function invalidUser($login, $email)
    {
        $sql = "SELECT*FROM usuario where login = '$login' and email = '$email';";
        $cn = openConnection();
        $q =  mysql_query($cn,$sql);
        if($a = mysqli_fetch_assoc($q)){
            $b = 1;
        }else{
            $b = 0;
        }
        closeConnection($cn)
        return $b
    }

    function insertUser($nome, $login, $senha, $email)
    {
        $cn = openConnection();
        $nome = param($cn, $nome);
        $login = param($cn, $login);
        $senha= param($cn, $senha);
        $email = param($cn, $email);

        $sql = "INSERT INTO usuario VALUE(null, '$nome', '$login', MD5('$senha'), '$email', null);";

        closeConnection($cn);
    }
?>