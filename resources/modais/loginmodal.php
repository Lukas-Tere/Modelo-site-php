
<div class="modal" id="login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-body" id="form">
                    <form method="POST" action="resources/query/login.php">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" id="txtLogin" name="txtLogin" class="form-control" placeholder="Login" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="password" id="txtSenha" name="txtSenha" class="form-control" placeholder="Senha" required maxlength="8">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Entrar" name="btnLogin" id="btnLogin" class="btn btn-success btnfirst">
                            <input type="reset" value="Limpar" class="btn btn-success btnfirst">
                            <button type="button" class="btn btn-info btnfirst" data-toggle="modal" data-target="#recup" data-dismiss="modal" style="margin-left: 10px;">Recuperar</button>
                        </div>
                    </form>
                </div>
                <div>
                    <button type="button" class="btn btn-success btnfirst" data-dismiss="modal">X</button>
                </div>
            </div>
        </div>
    </div>
</div>
