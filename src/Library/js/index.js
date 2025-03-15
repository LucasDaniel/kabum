
async function logar() {

    showLoading();

    let form = {
        email: document.getElementById('email').value,
        senha: document.getElementById('senha').value
    };

    await apiPost(GLOBAL_URL_API + 'user/login', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            toastSuccess(_return.message);
            //setCookie('token', _return.object.token, 0.1);
            localStorage.setItem('name', _return.data.name);
            localStorage.setItem('email', _return.data.email);
            goTo('home');
        },
        function (_return) {
            toastError(_return.responseJSON.message);
            hideLoading();
        });

}
