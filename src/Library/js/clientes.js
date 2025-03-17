
let idModalCliente = 0;

function criarNovoCliente() {
    displayBlockElement('modal-criar-novo-usuario');
    displayBlockElement('modal-background-black');
    setValueElement('nome','');
    setValueElement('data_nascimento','');
    setValueElement('cpf','');
    setValueElement('rg','');
    setValueElement('telefone','');
    setValueElement('enderecos',[]);
    changeInnerHtmlElement('modal-bt-text-save','Criar Usuário');
}

function saveCliente() {

    showLoading();

    let enderecos = document.getElementById('enderecos').selectedOptions;
    let sendEnderecos = [];
    for(let i = 0; i < enderecos.length; i++) {
        sendEnderecos.push(enderecos[i].value);
    }

    let form = {
        id: idModalCliente,
        nome: getValueElement('nome'),
        data_nascimento: getValueElement('data_nascimento').split("/").reverse().join("-"),
        cpf: getValueElement('cpf').replace(/[^0-9]/g, ''),
        rg: getValueElement('rg').replace(/[^0-9]/g, ''),
        telefone: getValueElement('telefone').replace(/[^0-9]/g, ''),
        enderecos: sendEnderecos
    }
    
    apiPost(GLOBAL_URL_API + 'cliente', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            toastSuccess(_return.message);
            goTo('clientes');
            closeModalId('modal-criar-novo-usuario');
        },
        function (_return) {
            toastError(_return.responseText);
            hideLoading();
        }
    );
}

function closeModalCliente() {
    closeModalId('modal-criar-novo-usuario');
}

function closeDeletarCliente() {
    idModalCliente = 0;
    closeModalId('modal-deletar-usuario');
}

function showDeletarCliente(id) {
    idModalCliente = id;
    displayBlockElement('modal-deletar-usuario');
    displayBlockElement('modal-background-black');
}

function deletarCliente() {

    showLoading();

    let form = {
        id: idModalCliente
    }
    
    apiPost(GLOBAL_URL_API + 'cliente/delete', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            toastSuccess(_return.message);
            goTo('clientes');
            closeModalId('modal-deletar-usuario');
            idModalCliente = 0;
        },
        function (_return) {
            toastError(_return.responseText);
            hideLoading();
        }
    );
}

function editarCliente(cliente) {
    displayBlockElement('modal-criar-novo-usuario');
    displayBlockElement('modal-background-black');
    idModalCliente = cliente.id;
    setValueElement('nome',cliente.nome);
    setValueElement('data_nascimento',cliente.data_nascimento.split("-").reverse().join("/"));
    setValueElement('cpf',cliente.cpf);
    setValueElement('rg',cliente.rg);
    setValueElement('telefone',cliente.telefone);
    let id_enderecos = cliente.id_enderecos.split(', ');
    jQuery(function($) {
        $('#enderecos').val(id_enderecos);
        $('#enderecos').trigger('change');
    });
    changeInnerHtmlElement('modal-bt-text-save','Salvar Usuário');
}

$(function () {
    $('#data_nascimento').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    $('#telefone').inputmask('(99) 99999-9999', { 'placeholder': '(__) _____-____' });
    $('#cpf').inputmask('999.999.999-99', { 'placeholder': '___.___.___.__' });
    $('#rg').inputmask('99.999-999', { 'placeholder': '__.___.___' });

    $('.select-cliente-endereco').select2();

    $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
        /*,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
});