<div id="modal-criar-novo-usuario" style="top: 50px;">
    <div class="show-modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Deseja salvar registro?</h4>
        </div>
        <div class="modal-body">
            <div class="form-group ta-left">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="text" class="form-control" id="data_nascimento">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control disable-arrows" id="telefone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="cpf">CPF</label>
                        <input type="number" class="form-control disable-arrows" id="cpf">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="rg">RG</label>
                        <input type="number" class="form-control disable-arrows" id="rg">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" id="modal-bt-text-close" onclick="closeModalCliente()">Calcelar</button>
            <button type="button" class="btn btn-primary" id="modal-bt-text-save" onclick="saveCliente()"></button>
        </div>
    </div>
</div>