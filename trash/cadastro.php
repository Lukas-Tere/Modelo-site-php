<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <form name="form" id="form" method="POST" action="incluir.php">
        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" required>
        <input type="text" name="txtLogin" id="txtLogin" placeholder="Login" required>
        <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" maxleingth="8" required>
        <input type="text" name="txtEmail" id="txtEmail" placeholder="Email" required>
        <input type="submit" name="btnIncluir" id="btnIncluir" value="cadastrar">
    
</form>
</body>
</html>