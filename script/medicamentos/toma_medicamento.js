export function buscarTipoToma() {
     return $.ajax({
        type: 'GET',
        url: "/lar-dsos/php/medicamentos/tipo_toma.php",
        async: true,
    });
}

