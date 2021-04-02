

function selPrograma(){
    $('#sltProg').empty();
    $('#sltProg').append('<option value="0">Seleccione...</option>')
    $.ajax({
        url: './api/v1/PresuPrograma.php?sel=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            $(json).each(function (index, item) {
                NumPrograma= json[index].NumPrograma;
                StrNomPrograma= json[index].StrNomPrograma;

                $('#sltProg').append('<option value="'+NumPrograma+'">('+NumPrograma+') '+StrNomPrograma+'</option>')
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(selPrograma)" + data.responseText);
        }
    });
}

function selSubPrograma(){
    $('#sltSubPro').empty();
    $('#sltSubPro').append('<option value="0">Seleccione...</option>')
    $.ajax({
        url: './api/v1/PresuSubPrograma.php?sel=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            //console.log(json)
            $(json).each(function (index, item) {
                NumSubPrograma= json[index].NumSubPrograma;
                StrNomSubPrograma= json[index].StrNomSubPrograma;
                NumPrograma= json[index].NumPrograma;

                $('#sltSubPro').append('<option value="'+NumSubPrograma+'">('+NumSubPrograma+') '+StrNomSubPrograma+'</option>')
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(selSubPrograma)" + data.responseText);
        }
    });
}

function selSubProducto(){
    $('#sltSubProducto').empty();
    $('#sltSubProducto').append('<option value="0">Seleccione...</option>')
    $.ajax({
        url: './api/v1/PresuSubProducto.php?sel=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            //console.log(json)
            $(json).each(function (index, item) {
                NumSubProducto= json[index].NumSubProducto;
                StrSubProducto= json[index].StrSubProducto;
                NumProducto= json[index].NumProducto;

                $('#sltSubProducto').append('<option value="'+NumSubProducto+'">('+NumSubProducto+') '+StrSubProducto+'</option>')
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(selSubProducto)" + data.responseText);
        }
    });
}

/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});

//Funcion para seguimiento
function InsSeguimiento(){
    var parametro = new FormData($("#formularioEnv")[0]);

    //console.log(parametro);
    // Display the key/value pairs
    /*for (var pair of parametro.entries()) {
        console.log(pair[0]+ ', ' + pair[1]);
    }*/

    let esperaSeguimiento = $.ajax({
        url: './api/v1/ComSeguimientos.php',
        type: 'POST',
        data: parametro,
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("#btnGuardar").text('GUARDANDO...').prop('disabled', true);
        },
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardar").text('GUARDAR').attr('disabled', false);
            let mensaje = response.state.strstate;
            //console.log(mensaje);
            let partida = mensaje.split(":");
            //console.log(partida);
            $('#NoSolicitud').val(partida[1]);

        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardar").text('GUARDAR').attr('disabled', false);
        }
    });

    $.when(esperaSeguimiento).done(function () {
        $('#formularioEnv')[0].reset();
        $('#modalSeguimiento').fadeOut();
    });
}

$('#btnVerSeg').click(function (){
    abrirModalVerSeg();
});

function abrirModalVerSeg(){
    let solicitud = $('#NumSolicitudSeg').val();
    var adjuntoHTML;
    $('#contSeguimientos').empty();
    let esperaSeg = $.ajax({
        url: './api/v1/ComSeguimientos.php?ComNumSolicitud='+solicitud,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            //console.log(json);
            if(json.length == 0){
                $('#contSeguimientos').append('<div id="" class="card">' +
                    '    <div class="card" id="Modal">' +
                    '        <div class="modal-header text-center bg-warning">' +
                    '            <h4 class="modal-title w-100 font-weight-bold"">NO HAY SEGUIMIENTOS</h4>' +
                    '            <button type="button" class="close" data-dismiss="modal" aria-label="Close"' +
                    '                    onclick="$(\'#Modal\').fadeOut();">' +
                    '                <span aria-hidden="true">&times;</span>' +
                    '            </button>' +
                    '        </div>' +
                    '        <br>' +
                    '        <div class="input-group mb-sm-4 col-sm-4 ">' +
                    '            <div class="input-group-prepend">' +
                    '            </div>' +
                    '        </div>' +
                    '        <div class="card-body text-center">' +
                    '            <h3>No hay seguimientos en este momento</h3>' +
                    '        </div>' +
                    '    </div>' +
                    '</div>');
            }

            $(json).each(function (index, item) {

                ComNumSeguimiento=json[index].ComNumSeguimiento;
                ComStrDescrip=json[index].ComStrDescrip;
                ComStrArchivo=json[index].ComStrArchivo;
                Fecha=json[index].Fecha;
                Hora=json[index].Hora;
                SegStrNomUsuario=json[index].SegStrNomUsuario;
                ComNumSolicitud=json[index].ComNumSolicitud;

                if(ComStrArchivo == null){
                    adjuntoHTML ='No Adjunto'
                }else{
                    adjuntoHTML = '<a class="btn btn-info col col-sm-6" href="./docs/'+ComStrArchivo+'">Descargar</a>'
                }

                $('#contSeguimientos').append('<table class="table table-bordered">' +
                    '          <tbody>' +
                    '            <tr class="table-primary">' +
                    '              <th scope="row">No.:</th>' +
                    '              <td>' +
                    '                <input style="border-width:0;color: black; background-color: #b8daff;" value ="'+ComNumSeguimiento+'" type="text " disabled id="NoSolicitud"></input>\n' +
                    '              </td>' +
                    '' +
                    '            </tr>' +
                    '            <tr>' +
                    '              <th scope="row">Descripcion:</th>' +
                    '              <td>'+ComStrDescrip+'</td>' +
                    '            </tr>\n' +

                    '              <th scope="row">Fecha Creación:</th>\n' +
                    '              <td>'+Fecha+' '+Hora+'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '            <tr>\n' +
                    '              <th scope="row">Adjunto:</th>\n' +
                    '              <td>'+adjuntoHTML+'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '              <th scope="row">Crador Seguimiento:</th>\n' +
                    '              <td>'+SegStrNomUsuario+'</td>\n' +
                    '            </tr>\n' +
                    '          </tbody>\n' +
                    '            </table>')
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos" + data.responseText);
        }
    });

    $.when(esperaSeg).done(function(){
        $('#modalVerSeguimientos').fadeIn();
        $('#inputNoSolicitudVerS').val(solicitud);
    });

}

function cambioDepto(solicitud){
    console.log("cambioDepto");
    $.ajax({
        url: './api/v1/ComSeguimientos.php?ComNumSolicitud='+solicitud,
        type: "PUT",
        beforeSend: function () {
        },
        success: function (response) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '¡CORRECTO!',
                text: response.state.strstate,
                showConfirmButton: false,
                timer: 2500
            });
        },
        error: function (request, status, error) {
            console.log(request);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: ' '+ request.responseText,
            });
        }
    });
}


function titulosMensaje(codstate){
    /*
    Esta Funcion se utiliza para indicarle al alert
    que Titulo debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'Oops...'
    } else {
        return '¡CORRECTO!'
    }
}

function swichSuccessWarning(codstate){
    /*
    Esta Funcion se utiliza para indicarle al alert
    que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }
}


function autorizarSolicitud(numAutorizacion, Autoriza, tipoAutorizacion){
    if(Autoriza =='GF'){
        //Gerencia Financiera
        $.ajax({
            url: './api/v1/PresuAutorizacion.php?numAutorizacion='+numAutorizacion+'&AutorizaGF&CharAutorizaGF='+tipoAutorizacion,
            type: "PUT",

            beforeSend: function () {
                $("#btnGuardarLab").prop('disabled', true);
            },
            success: function (response) {
                $.toast({
                    title: 'Informativo',
                    subtitle: '1 segundo',
                    content: response.state.strstate,
                    type: swichSuccessWarning(response.state.codstate),
                    pause_on_hover: true,
                    delay: 5000
                });

            },
            error: function (request, status, error) {
                console.log(request);
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: ' ' + request.responseText,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                $("#btnGuardarLab").text('GUARDAR').attr('disabled', false);
            }
        });//fin ajax PUT
    }else{
        //Direccion Ejecutiva
        $.ajax({
            url: './api/v1/PresuAutorizacion.php?numAutorizacion='+numAutorizacion+'&AutorizaDE&Depto='+tipoAutorizacion,
            type: "PUT",

            beforeSend: function () {
                $("#btnGuardarLab").prop('disabled', true);
            },
            success: function (response) {
                $.toast({
                    title: 'Informativo',
                    subtitle: '1 segundo',
                    content: response.state.strstate,
                    type: swichSuccessWarning(response.state.codstate),
                    pause_on_hover: true,
                    delay: 5000
                });

                $("#btnGuardarLab").attr('disabled', false);


            },
            error: function (request, status, error) {
                console.log(request);
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: ' ' + request.responseText,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                $("#btnGuardarLab").text('GUARDAR').attr('disabled', false);
            }
        });//fin ajax PUT
    }
}

function abriActualizarAdjuntos(NumSolCompra){
    console.log(NumSolCompra);
    $('#inNumSolActAdjuntos').val(NumSolCompra);
    $('#modalActAdjuntos').fadeIn();
}

$('#btnActDictamen').click(function (){
    actualizarDictamen();
});

$('#btnActFicha').click(function (){
    actualizarFicha();
});

function actualizarDictamen(){
    console.log("se ejecuta Dicatemennnnnnnn tecnica");
    var parametros = new FormData($("#ActDictamen")[0]);
    let NumSolPedido = $('#inNumSolActAdjuntos').val();
    parametros.append("NumSolPedido", NumSolPedido);
    parametros.append("DictamenTecnico", true);

   $.ajax({
        url: './api/v1/ComActualizacionAdjuntos.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforeSend: function () {
            //$("#btnGuardar").text('GUARDANDO...').prop('disabled', true);
        },
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });

        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardar").text('GUARDAR').attr('disabled', false);
        }
    });
}

function actualizarFicha(){

    console.log("se ejecuta ficha tecnica");
    var parametros = new FormData($("#ActFicha")[0]);
    let NumSolPedido = $('#inNumSolActAdjuntos').val();
    parametros.append("NumSolPedido", NumSolPedido);
    parametros.append("FichaTecnica", true);

    $.ajax({
        url: './api/v1/ComActualizacionAdjuntos.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforeSend: function () {
            //$("#btnGuardar").text('GUARDANDO...').prop('disabled', true);
        },
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });

        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardar").text('GUARDAR').attr('disabled', false);
        }
    });
}
