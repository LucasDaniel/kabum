
let idDeletarCliente = 0;

function criarNovoCliente() {
    displayBlockElement('modal-criar-novo-usuario');
    displayBlockElement('modal-background-black');
}

function saveCliente() {
    showLoading();

    let form = {
        nome: getValueElement('nome'),
        data_nascimento: getValueElement('data_nascimento'),
        cpf: getValueElement('cpf'),
        rg: getValueElement('rg'),
        telefone: getValueElement('telefone'),
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

function closeDeletarCliente() {
    idDeletarCliente = 0;
    closeModalId('modal-deletar-usuario');
}

function showDeletarCliente(id) {
    idDeletarCliente = id;
    displayBlockElement('modal-deletar-usuario');
    displayBlockElement('modal-background-black');
}

function deletarCliente() {

    showLoading();

    let form = {
        id: idDeletarCliente
    }
    
    apiPost(GLOBAL_URL_API + 'cliente/delete', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            console.log(_return);
            toastSuccess(_return.message);
            goTo('clientes');
            closeModalId('modal-deletar-usuario');
            idDeletarCliente = 0;
        },
        function (_return) {
            toastError(_return.responseText);
            hideLoading();
        }
    );
}

function editarCliente(id) {
    
}

$(function () {
    $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
        /*,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});