<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="script/css/bootstrap.css" />
</head>
<body class="text-center" style="margin-top: 15px">
    <div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
        logar 
        </button> <br>
        <div class="modal" id="login" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-body" id="form">
                            <form method="POST" action="login.php">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" id="txtLogin" name="txtLogin" class="form-control" placeholder="Login" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="password" id="txtSenha" name="txtSenha" class="form-control" placeholder="Senha" required maxlength="8">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" value="Entrar" class="btn btn-primary">
                                    <input type="reset" value="Limpar" class="btn btn-secondary">
                                </div>
                            </form>
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label for="txtCad">Não posssui conta? cadestre-se.</label> <br>         
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registro">
            registrar
            </button>
            <div class="modal" id="registro" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-body" id="form">
                                <form method="POST" action="cadastrar.php">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <input type="text" id="txtNome" name="txtNome" required class="form-control" placeholder="Nome">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="email" id="txtEmail" name="txtEmail" required class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <input type="text" id="txtLogin" name="txtLogin" required class="form-control" placeholder="Login">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="password" id="txtSenha" name="txtSenha" required class="form-control" placeholder="Senha" maxleingth="8">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" value="Cadastrar" name="btnCad" id="btnCad" class="btn btn-primary">
                                        <input type="reset" value="Limpar" class="btn btn-secondary">
                                    </div>
                                </form>
                            </div>
                            <div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
</form>
</body>
<script type="text/javascript" src="script/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="script/js/popper.js"></script>
<script type="text/javascript" src="script/js/bootstrap.js"></script>
<?php 
if(isset($_GET['alerta'])){
    echo "<script>alert('" . $_GET['alerta'] . "');</script>";
    
}
?>
</html>