
async function logar() {

    showLoading();

    let form = {
        email: document.getElementById('email').value,
        password: document.getElementById('password').value
    };

    await apiPost(GLOBAL_URL_API + 'logar', form, GLOBAL_DATATYPE_JSON,
        function (_return) {
            toastSuccess(_return.message);
            setCookie('token', _return.object.token, 0.1);
            localStorage.setItem('name', _return.object.name);
            localStorage.setItem('email', _return.object.email);
            goTo('/pt/dashboard');
        },
        function (_return) {
            toastError(_return.responseJSON.message);
            hideLoading();
        });

}
