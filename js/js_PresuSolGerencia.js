$(document).ready(function () {
    mostrarSolPresu();
});

function mostrarSolPresu(){
    $('#tbodySolPresu').empty();
    console.log("ejecucion mostrar");
    $.ajax({
        url: './api/v1/ComSolicitud.php?SolGF=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length ==0){
                Swal.fire({
                    icon: 'info',
                    title: 'NO HAY SOLICITUDES'
                });
                return 0;
            }
            $(json).each(function (index, item) {
                ComNumSolicitud=json[index].ComNumSolicitud;
                Solicitante=json[index].Solicitante;
                idSolicitante=json[index].idSolicitante;
                ComStrDepto=json[index].ComStrDepto;
                ComStrTitulo=json[index].ComStrTitulo;
                NumAutorizacion=json[index].NumAutorizacion;
                ComStrDetalleComp=json[index].ComStrDetalleComp;
                Encargado=json[index].Encargado;
                idEncargado=json[index].idEncargado;
                AnioSolicitud=json[index].AnioSolicitud;

                $('#tbodySolPresu').append('<tr>\n' +
                    '                            <td>'+ComNumSolicitud+'-'+AnioSolicitud+'</td>\n' +
                    '                            <td>'+Solicitante+'</td>\n' +
                    '                            <td class="bajarTexto">'+ComStrDepto+'</td>\n' +
                    '                            <td>'+ComStrTitulo+'</td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-download" type="button" style="color: #007e33" id="'+ComNumSolicitud+'" name="btnAdjuntar" onclick="FormatoSolicitud(this.id)"></i></h4></td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-plus" type="button" style="color: orange" onclick="abrAgrSeg('+ComNumSolicitud+');" id="btnSeg-'+ComNumSolicitud+'" name="btnAgregarSeg'+ComNumSolicitud+'" value="'+ComNumSolicitud+'"></i></h4></td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-check" type="button" style="color: royalblue" onclick="autorizarSolicitud('+NumAutorizacion+', \'GF\', \'SI\');" id="btnAut-'+ComNumSolicitud+'" name="btnAutorizar'+ComNumSolicitud+'" value="'+ComNumSolicitud+'"></i></h4></td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-times" type="button" style="color: red" onclick="autorizarSolicitud('+NumAutorizacion+', \'GF\', \'NO\');" id="btnRec-'+ComNumSolicitud+'" name="btnRechazar-'+ComNumSolicitud+'" value="'+ComNumSolicitud+'"></i></h4></td>\n' +
                    '                        </tr>');
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(tipoCompra)" + data.responseText);
        }
    });
}

function abrSeg() {
    $('#modalSeguimiento').fadeIn();
}


