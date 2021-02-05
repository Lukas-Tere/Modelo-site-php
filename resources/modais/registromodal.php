<div class="modal" id="registro" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-body" id="form">
                    <form method="POST" action="resources/query/cadastrar.php">
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
                            <input type="submit" value="Cadastrar" name="btnCad" id="btnCad" class="btn btn-success btnfirst">
                            <input type="reset" value="Limpar" class="btn btn-info btnfirst">
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