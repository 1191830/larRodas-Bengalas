export function buscarParametroUrl(name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results != null) {
        return results[1];
    }
    return false;
}

export function validarCampoVazio(campos) {
    var obj = {};
    $.each(campos, function (key, campo) {
        if (!campo.val()) {
            obj = {campo : key };
        }
    });
    return obj;

}
