$(document).ready(function (){
    mostrarSolPresu();
});

function mostrarSolPresu(){
    $('#tbodySolPresu').empty();
    $.ajax({
        url: './api/v1/ComSolicitud.php?SolRecibidasPresu=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            //console.log(json);
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
                SegNumUsuarioSol=json[index].SegNumUsuarioSol;
                Encargado=json[index].Encargado;
                SegNumUsuarioEnc=json[index].SegNumUsuarioEnc;
                ComStrDepto=json[index].ComStrDepto;
                SegStrPuesto=json[index].SegStrPuesto;
                ComStrTitulo=json[index].ComStrTitulo;
                Fecha=json[index].Fecha;
                Hora=json[index].Hora;
                ComNumEstatus=json[index].ComNumEstatus;
                mostIdSolicitud=json[index].mostIdSolicitud;
                ComDictamenAdjunto=json[index].ComDictamenAdjunto;
                ComFichaAdjunto=json[index].ComFichaAdjunto;
                ComStrDetalleComp=json[index].ComStrDetalleComp;
                CompNumTipCompra=json[index].CompNumTipCompra;
                ComNumCorrelativo=json[index].ComNumCorrelativo;
                ComNumStatus=json[index].ComNumStatus;
                ComStrAbreviatura=json[index].ComStrAbreviatura;

                $('#tbodySolPresu').append('<tr>\n' +
                    '                            <td>'+mostIdSolicitud+'</td>\n' +
                    '                            <td>'+Solicitante+'</td>\n' +
                    '                            <td class="bajarTexto">'+ComStrDepto+'</td>\n' +
                    '                            <td>'+ComStrTitulo+'</td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-download" type="button" style="color: #007e33" id="'+ComNumSolicitud+'" name="btnAdjuntar" onclick="FormatoSolicitud(this.id)"></i></h4></td>\n' +
                    '                            <td class="centrarCont"><h4><i class="far fa-check-circle" type="button" style="color: orange" ondblclick="cambioDepto('+ComNumSolicitud+');" id="btnSeg-'+ComNumSolicitud+'" name="btnRecibirSolicitud'+ComNumSolicitud+'" value="'+ComNumSolicitud+'"></i></h4></td>\n'+
                    '                        </tr>');
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(SolicitudesRecibidas)" + data.responseText);
        }
    });
}

