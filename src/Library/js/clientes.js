
function criarNovoCliente() {    
    console.log("criarNovoCliente");
    enableElement('modal-bt-text-close');
    displayBlockElement('modal-criar-novo-usuario');
    showModal('Criando um novo cliente','Salvar personagem','Cancelar');
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
            console.log(_return);
            toastSuccess(_return.message);
            hideLoading();
            goTo('clientes');
            closeModalId('modal-criar-novo-usuario')
        },
        function (_return) {
            toastError(_return.responseText);
            hideLoading();
        }
    );
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