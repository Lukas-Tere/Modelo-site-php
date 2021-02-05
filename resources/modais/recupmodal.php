<div class="modal" id="recup" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-body" id="form">
                    <form method="POST" action="resources/query/recupsenha.php">
                        <div class="row">
                            <div class="form-group col-lg-6">

                            </div>
                            <div class="form-group col-lg-12">
                                <input type="email" id="txtEmail" name="txtEmail" required class="form-control" placeholder="Digite seu Email">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Recuperar" name="btnCad" id="btnCad" class="btn btn-success btnfirst">
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