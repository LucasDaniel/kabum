
let idModalEndereco = 0;

function criarNovoEndereco() {
    displayBlockElement('modal-criar-novo-endereco');
    displayBlockElement('modal-background-black');
    setValueElement('rua','');
    changeInnerHtmlElement('modal-bt-text-save','Criar Endereço');
}

function saveEndereco() {
    showLoading();

    let form = {
        id: idModalEndereco,
        rua: getValueElement('rua'),
    }
    
    apiPost(GLOBAL_URL_API + 'endereco', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            toastSuccess(_return.message);
            goTo('enderecos');
            closeModalId('modal-criar-novo-endereco');
        },
        function (_return) {
            toastError(_return.responseText);
            hideLoading();
        }
    );
}

function closeModalEndereco() {
    closeModalId('modal-criar-novo-endereco');
}

function closeDeletarEndereco() {
    idModalEndereco = 0;
    closeModalId('modal-deletar-endereco');
}

function showDeletarEndereco(id) {
    idModalEndereco = id;
    displayBlockElement('modal-deletar-endereco');
    displayBlockElement('modal-background-black');
}

function deletarEndereco() {

    showLoading();

    let form = {
        id: idModalEndereco
    }
    
    apiPost(GLOBAL_URL_API + 'endereco/delete', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            console.log(_return);
            toastSuccess(_return.message);
            goTo('enderecos');
            closeModalId('modal-deletar-endereco');
            idModalEndereco = 0;
        },
        function (_return) {
            toastError(_return.responseText);
            hideLoading();
        }
    );
}

function editarEndereco(endereco) {
    displayBlockElement('modal-criar-novo-endereco');
    displayBlockElement('modal-background-black');
    idModalEndereco = endereco.id;
    setValueElement('rua',endereco.rua);
    changeInnerHtmlElement('modal-bt-text-save','Salvar Endereço');
}

$(function () {
    $('#data_nascimento').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    $('#telefone').inputmask('(99) 99999-9999', { 'placeholder': '(__) _____-____' })
    $('#cpf').inputmask('999.999.999-99', { 'placeholder': '___.___.___.__' })
    $('#rg').inputmask('99.999-999', { 'placeholder': '__.___.___' })

    $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
        /*,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
});