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
                        <input id="data_nascimento" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 99999-9999&quot;" data-mask="" inputmode="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;999.999.999.99&quot;" data-mask="" inputmode="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="rg">RG</label>
                        <input id="rg" type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;99.999.999&quot;" data-mask="" inputmode="text">
                    </div>
                </div>
            </div>
            <div class="form-group ta-left">
                <label for="enderecos">Endereços</label>
                <select id="enderecos" class="select-cliente-endereco" multiple="multiple" data-placeholder="Selecione um endereço" style="width: 100%;">
                    <?php foreach($enderecos as $id => $e) { ?>
                        <option value="<?= $e['id'] ?>"><?= $e['rua'] ?>,<?= $e['numero'] ?> - <?= $e['complemento'] ?> - <?= $e['bairro'] ?> - <?= $e['cidade'] ?>/<?= $e['estado'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" id="modal-bt-text-close" onclick="closeModalCliente()">
                <i class="nav-icon fas fa-arrow-left"></i>
            </button>
            <button type="button" class="btn btn-primary" id="modal-bt-text-save" onclick="saveCliente()">
                <i class="nav-icon fas fa-plus"></i>
            </button>
        </div>
    </div>
</div>