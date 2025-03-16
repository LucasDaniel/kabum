
let idModalEndereco = 0;

function criarNovoEndereco() {
    displayBlockElement('modal-criar-novo-endereco');
    displayBlockElement('modal-background-black');
    setValueElement('rua','');
    changeInnerHtmlElement('modal-bt-text-save','Criar Endereço');
}

function selecionouEstado() {
    showLoading();
    let estado = getValueElement('estado');
    changeInnerHtmlElement('cidade','');
    setValueElement('cidade','');
    apiGet('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+estado+'/municipios', GLOBAL_DATATYPE_JSON, 
        function(_return) {
            let elementCidade = '';
            _return.forEach(element => {
                elementCidade += '<option value="'+element.nome+'">'+element.nome+'</option>';
            });
            changeInnerHtmlElement('cidade',elementCidade);
            toastSuccess("Cidades carregadas com sucesso");
            hideLoading();
        }, function(_return) {
            toastError(_return.responseText);
            hideLoading();
        });
}

function saveEndereco() {
    showLoading();

    let form = {
        id: idModalEndereco,
        rua: getValueElement('rua'),
        cidade: getValueElement('cidade'),
        estado: getValueElement('estado'),
        bairro: getValueElement('bairro'),
        numero: getValueElement('numero'),
        complemento: getValueElement('complemento')
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
    console.log();
    console.log(getValueElement('cidade'));
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
    //Initialize Select2 Elements
    $('.select-estado').select2()
    $('.select-cidade').select2()

    $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
        /*,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
});

selecionouEstado();