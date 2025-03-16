let host = window.location.hostname;
let GLOBAL_URL = "http://localhost/KABUM";
const GLOBAL_URL_API = GLOBAL_URL + "/";
const GLOBAL_DATATYPE_JSON = "json";
let modalLoading = $('#modal-overlay');

console.log(window);
console.log(window.location);
console.log(window.location.search);
console.log(window.location.search.split("?")[1]);

// ----------------- FUNÇÕES GERAIS -----------------

/**
 * Verifica os erros que estão na url
 */
function verifySearchErrors() {
    if (window.location.search == "") return;
    let errors = window.location.search.split("?");
    if (errors.length < 2) return;
    errors = errors[1].split("&");
    let aux = null;
    errors.forEach(element => {
        aux = element.split('=');
        if (aux.length < 2) return;
        if (aux[1] == 'token') showErrorToken();
    });
}

function showErrorToken() {
    toastError("Token inválido");
}

function goTo(url) {
    setTimeout(function() {
        window.location.href = GLOBAL_URL+"/"+url;
    },500);
}

function showLoading(id) {
    $('#modal-overlay').css("display", "block").css("opacity", "1");
}

function hideLoading(id) {
    $('#modal-overlay').css("display", "none").css("opacity", "0");
}

// ----------------- FUNÇÕES DA API -----------------

function apiGet(url, dataType, successPromisse, errorPromisse) {
    jQuery.ajax({
        url: url,
        type: "GET",
        dataType: dataType,
        success: function (_return) {
            successPromisse(_return);
        },
        error: function (_return) {
            errorPromisse(_return);
        }
    });
}

async function apiPost(url, form, dataType, successPromisse, errorPromisse) {
    jQuery.ajax({
        url: url,
        type: "POST",
        data: form,
        dataType: dataType,
        success: function (_return) {
            successPromisse(_return);
        },
        error: function (_return) {
            errorPromisse(_return);
        }
    });
}

function apiGetBearer(url, dataType, successPromisse, errorPromisse) {
    jQuery.ajax({
        url: url,
        type: "GET",
        dataType: dataType,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + getCookie('token')
        },
        success: function (_return) {
            successPromisse(_return);
        },
        error: function (_return) {
            errorPromisse(_return);
        }
    });
}

async function apiPostBearer(url, form, dataType, successPromisse, errorPromisse) {
    jQuery.ajax({
        url: url,
        type: "POST",
        data: form,
        dataType: dataType,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + getCookie('token')
        },
        success: function (_return) {
            successPromisse(_return);
        },
        error: function (_return) {
            errorPromisse(_return);
        }
    });
}

async function apiDeleteBearer(url, form, dataType, successPromisse, errorPromisse) {
    jQuery.ajax({
        url: url,
        type: "DELETE",
        data: form,
        dataType: dataType,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + getCookie('token')
        },
        success: function (_return) {
            successPromisse(_return);
        },
        error: function (_return) {
            errorPromisse(_return);
        }
    });
}

// -------------------------------- COOKIES -------------------------------- 

function setCookie(name, value = 1, days = 7) {
    var expires = "";
    if (days) {
        var date = new Date((new Date).getTime() + days * 86400000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

// -------------------------------- TOASTS -------------------------------- 

function getToast() {
    return Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
}

/**
 * Executa o toast
 * @param {string} title | string
 */
function toastSuccess(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'success',
        title: title
    });
}
function toastInfo(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'info',
        title: title
    });
}
function toastError(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'error',
        title: title
    });
}
function toastWarning(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'warning',
        title: title
    });
}
function toastQuestion(title) {
    let Toast = getToast();
    Toast.fire({
        icon: 'question',
        title: title
    });
}

// -------------------------------- EXECUÇÕES -------------------------------- 

verifySearchErrors();