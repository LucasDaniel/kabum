<div id="modal-deletar-usuario" style="top: 50px;">
    <div class="show-modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Deseja deletar o registro?</h4>
        </div>
        <div class="modal-body-delete">
            <p>Essa ação não pode ser recuperada</p>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" id="modal-bt-text-cancelar-deletar-registro" onclick="closeDeletarCliente()">
                <i class="nav-icon fas fa-arrow-left"></i>
            </button>
            <button type="button" class="btn btn-danger" id="modal-bt-text-deletar-registro" onclick="deletarCliente()">
                <i class="nav-icon fas fa-check"></i>
            </button>
        </div>
    </div>
</div>