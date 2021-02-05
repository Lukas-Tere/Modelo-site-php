<?php
    define("NOME", "CMS");
    define("SERVIDOR", "127.0.0.1");
    define("USUARIO", "root");
    define("SENHA", "");
    define("BANCO_DADOS", "cms");
    if(isset($_POST["enviar"])) 
    {
        // Lista de tipos de arquivos permitidos
        $tiposPermitidos= array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
        // Tamanho máximo (em bytes)
        $tamanhoPermitido = 1024 * 5000; // 5000 Kb
        // O nome original do arquivo no computador do usuário
        $arqName = $_FILES['arquivo']['name'];
        // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
        $arqType = $_FILES['arquivo']['type'];
        // O tamanho, em bytes, do arquivo
        $arqSize = $_FILES['arquivo']['size'];
        // O nome temporário do arquivo, como foi guardado no servidor
        $arqTemp = $_FILES['arquivo']['tmp_name'];
        // O código de erro associado a este upload de arquivo
        $arqError = $_FILES['arquivo']['error'];

        if ($arqError == 0) {
            // Verifica o tipo de arquivo enviado
            if (array_search($arqType, $tiposPermitidos) === false) {
                echo 'O tipo de arquivo enviado é inválido!';
            // Verifica o tamanho do arquivo enviado
            } else if ($arqSize > $tamanhoPermitido) {
                echo 'O tamanho do arquivo enviado é maior que o limite!';
            // Não houveram erros, move o arquivo
            } 
            else 
            {
                $pasta = 'uploads/';
                // Pega a extensão do arquivo enviado
                $extensao = explode('.', $arqName);
                // Define o novo nome do arquivo usando um UNIX TIMESTAMP
                $nome = time() . '.' . $extensao[(count($extensao) - 1)];
                // Copia o arquivo para o diretório do servidor
                $upload = move_uploaded_file($arqTemp, $pasta . $nome);
                if($upload) 
                {
                    $cn = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO_DADOS);
                    $q = mysqli_query($cn, "INSERT INTO arquivos(id, nome) VALUES (null,'$nome')") or die(mysqli_error($cn));
                    if(mysqli_affected_rows($cn) > 0) 
                    {
                        $id = mysqli_insert_id($cn);
                    }
                    mysqli_close($cn);
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Título da Página (Estrutura básica de uma página com HTML 5)</title>
	<link href="css/seu-stylesheet.css" rel="stylesheet"/>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="#">
        <input type="file" name="arquivo" />
        <input type="submit" name="enviar" />
    </form>

    <?php 
    if(isset($id)) {
        echo $arqName . "<br>";
        echo $arqType . "<br>";
        echo $arqSize . "<br>";
        echo $arqTemp . "<br>";
        echo $arqError . "<br>";
        echo "<img src='uploads/$nome' />";
    }
    ?>

    

</body>
</html>
dashboard