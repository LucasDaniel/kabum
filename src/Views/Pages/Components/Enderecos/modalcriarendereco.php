<div id="modal-criar-novo-endereco" style="top: 50px;">
    <div class="show-modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Deseja salvar registro?</h4>
        </div>
        <div class="modal-body">
            <div class="form-group ta-left">
                <label for="rua">Rua</label>
                <input type="text" class="form-control" id="rua">
            </div>
            <div class="form-group ta-left">
                <label for="estado">Estado</label>
                <select class="form-control select2" style="width: 100%;">
                    <?php foreach($cidade_estados['estados'] as $id => $e) { ?>
                        <option value="<?= $e['sigla'] ?>"><?= $e['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div></div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" id="modal-bt-text-close" onclick="closeModalEndereco()">Calcelar</button>
            <button type="button" class="btn btn-primary" id="modal-bt-text-save" onclick="saveEndereco()"></button>
        </div>
    </div>
</div>