
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

    if (form.nome.length < 3) { toastError("O nome precisa ter 3 caracteres no mínimo"); hideLoading(); return; }
    if (form.nome.length > 255) { toastError("O nome esta muito longo"); hideLoading(); return; }
    if (form.data_nascimento.length != 10) { toastError("A data de nascimento esta incorreta"); hideLoading(); return; }
    if (form.telefone.length != 11) { toastError("O telefone esta incorreto"); hideLoading(); return; }
    if (form.cpf.length != 11) { toastError("O CPF esta incorreto"); hideLoading(); return; }
    if (form.rg.length != 8) { toastError("O RG esta incorreto"); hideLoading(); return; }
    if (form.enderecos.length < 1) { toastError("Você precisa adicionar pelo menos um endereço"); hideLoading(); return; }
    
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
}

$(function () {
    $('#data_nascimento').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    $('#telefone').inputmask('(99) 99999-9999', { 'placeholder': '(__) _____-____' });
    $('#cpf').inputmask('999.999.999-99', { 'placeholder': '___.___.___.__' });
    $('#rg').inputmask('99.999-999', { 'placeholder': '__.___.___' });

    $('.select-cliente-endereco').select2();

    $("#example1").DataTable({
        "language": {
            "sInfo": "Mostrando _START_ à _END_ de _TOTAL_ entradas",
            "sSearch": "<i class='nav-icon fas fa-search'></i>",
            "oPaginate": {
                "sFirst": "Primeiro", 
                "sLast": "Ultimo", 
                "sNext": "Proximo", 
                "sPrevious": "Anterior"
            }
        },
        "responsive": true, "lengthChange": false, "autoWidth": false
        /*,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
});