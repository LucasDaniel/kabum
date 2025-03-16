
localStorage.setItem('nome', '');
localStorage.setItem('email', '');
eraseCookie('token');



async function logar() {

    showLoading();

    let form = {
        email: document.getElementById('email').value,
        senha: document.getElementById('senha').value
    };

    await apiPost(GLOBAL_URL_API + 'user/login', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            console.log(_return);
            toastSuccess(_return.message);
            setCookie('token', _return.data.token, 0.1);
            localStorage.setItem('nome', _return.data.nome);
            localStorage.setItem('email', _return.data.email);
            goTo('home');
        },
        function (_return) {
            console.log(_return);
            toastError(_return.responseText);
            hideLoading();
        });

}
