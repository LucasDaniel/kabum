<div id="modal-criar-novo-endereco" style="top: 50px;">
    <div class="show-modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Deseja salvar registro?</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group ta-left">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group ta-left">
                        <label for="numero">Numero</label>
                        <input type="text" class="form-control" id="numero">
                    </div>
                </div>
            </div>
            <div class="form-group ta-left">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="estado">Estado</label>
                        <select id="estado" class="form-control select-estado" style="width: 100%;" onchange="selecionouEstado()">
                            <?php foreach($cidade_estados['estados'] as $id => $e) { ?>
                                <option value="<?= $e['sigla'] ?>"><?= $e['nome'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ta-left">
                        <label for="cidade">Cidade</label>
                        <select id="cidade" class="form-control select-cidade" style="width: 100%;">
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group ta-left">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro">
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" id="modal-bt-text-close" onclick="closeModalEndereco()">Calcelar</button>
            <button type="button" class="btn btn-primary" id="modal-bt-text-save" onclick="saveEndereco()"></button>
        </div>
    </div>
</div>