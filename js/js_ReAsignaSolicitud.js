$(document).ready(function(){
	mostrarSolicitudes();
    selEstatusFin();
});

function swichSuccessWarning(codstate) {
    /*
    Esta Funcion se utiliza para indicarle al Toast
    que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }
}

function mostrarSolicitudes(){
//console.log("mostrarSolisicitudes en autoria Solicitud");
    $.ajax({
        url: './api/v1/ComSolicitud.php?Reasignacion=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length ==0){
                $('#contenedorSR').append('<div id="" class="card">' +
                    '    <div class="card" id="Modal">' +
                    '        <div class="modal-header text-center bg-warning">' +
                    '            <h4 class="modal-title w-100 font-weight-bold"">NO HAY SOLICITUDES</h4>' +
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
                    '            <h3>No hay solicitudes en este momento</h3>' +
                    '        </div>' +
                    '    </div>' +
                    '</div>');
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

                if(ComDictamenAdjunto == null){
                    adjuntoHTML ='No Adjunto'
                }else{
                    adjuntoHTML = '<a class="btn btn-danger col col-sm-12 btn-block" href="./docs/'+ComDictamenAdjunto+'">Descargar</a>'
                }

                if(ComFichaAdjunto == null){
                    adjuntoHTMLFicha ='No Adjunto'
                }else{
                    adjuntoHTMLFicha = '<a class="btn btn-info col col-sm-12 btn-block" href="./docs/'+ComFichaAdjunto+'">Descargar</a>'
                }

                $('#contenedorSR').append('<table class="table table-bordered">' +
        '          <tbody>' +
        '            <tr class="table-primary">' +
        '              <th scope="row">No. Solicitud de Pedido:</th>' +
        '              <td>' +
        '                <input style="border-width:0;color: black; background-color: #b8daff;" value ="'+mostIdSolicitud+'" type="text " disabled id="NoSolicitud"></input>\n' +
        '              </td>' +
        '' +
        '            </tr>' +
        '            <tr>' +
        '              <th scope="row">Nombre Solicitante:</th>' +
        '              <td>'+Solicitante+'</td>' +
        '            </tr>\n' +
        '\n' +
        '            <tr>\n' +
        '              <th scope="row">Departamento:</th>\n' +
        '              <td>'+ComStrDepto+'</td>\n' +
        '              <tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Puesto Solicitante:</th>\n' +
        '              <td>'+SegStrPuesto+'</td>\n' +
        '              <tr>\n' +
        '                <th scope="row">Estado:</th>\n' +
        '                <td>'+ComStrTitulo+'</td>\n' +
        '              </tr>\n' +
        '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Fecha Creación:</th>\n' +
        '              <td>'+Fecha+' '+Hora+'</td>\n' +
        '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Dictamen técnico:</th>\n' +
        '              <td>'+adjuntoHTML+'</td>\n' +
        '            </tr>\n' +
         '            <tr>\n' +
         '              <th scope="row">Ficha técnica:</th>\n' +
         '              <td>'+adjuntoHTMLFicha+'</td>\n' +
         '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Adjunto:</th>\n' +
        '              <td>\n' +
        '                <div class="col-sm-12 offset-sm row">\n' +
        '                  <div class="col-sm-12">\n' +
        '                    <button class="btn btn-success btn-block" id="'+ComNumSolicitud+'" onclick="FormatoSolicitud(this.id)">Formato Solicitud de Pedido <i class="fas fa-download"></i></button>\n' +
        '                  </div>\n' +
        '                </div>\n' +
        '              </td>\n' +
        '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Encardo:</th>\n' +
        '              <td>'+Encargado+'</td>\n' +
        '              <tr>\n' +
        '            <tr>\n' +
        '          </tbody>\n' +
        '<!-- Botones-------------------------------------------------------------------->\n' +
    '          <tr>\n' +
    '            <td class ="col-sm-12" colspan="2">\n' +
    '              <div class="col-sm-12 row">\n' +
    '                <div class="col-sm-6">\n' +
    '                  <button type="button" class="btn btn-warning btn-block" id="'+ComNumSolicitud+'" onclick="abrirModal(this.id)">\n' +
    '                    Agregar Seguimiento\n' +
    '                  </button>\n' +
    '                </div>\n' +
    '                <div class="col-sm-6">\n' +
    '                  <button type="button" class="btn btn-primary btn-block" id="'+ComNumSolicitud+'" onclick="abrirModalVerSeg(this.id)">\n' +
    '                    Ver Seguimientos\n' +
    '                  </button>\n' +
    '                </div>\n' +
    '              </div>\n' +
    '            </td>\n' +
    '            <tr>\n' +
    '              <tr>\n' +
    '            <td class ="col-sm-12" colspan="2">\n' +
    '              <div class="col-sm-10 row" style="text-align: center">             \n' +
    '                <div class="dropdown col col-sm-12 offset-sm-1">\n' +
    '                  <button class="btn dropdown-toggle btn-black btn-block" type="button" id="btnAsignarA'+ComNumSolicitud+'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
    '                    Asignar a \n' +
    '                  </button>\n' +
    '                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="btnEncargados'+ComNumSolicitud+'">\n' +
    '                  </div>\n' +
    '                </div>              \n' +
    '                \n' +
    '              </div>\n' +
    '            </td>\n' +
    '            <tr>\n' +
                    '              <tr>\n' +
                    '            <td class ="col-sm-12" colspan="2">\n' +
                    '              <div class="col-sm-10 row" style="text-align: center">             \n' +
                    '                <div class="dropdown col col-sm-12 offset-sm-1">\n' +
                    '                   <button type="button" class="btn btn-danger btn-block" id="'+ComNumSolicitud+'" name="bntFinalizar" onclick="abrirModalFinal(this.id, this.name)">\n' +
                    '                    Re-Adjudicar \n' +
                    '                  </button>\n' +

                    '                  </div>\n' +
                    '                </div>              \n' +
                    '                \n' +
                    '              </div>\n' +
                    '            </td>\n' +
                    '            <tr>\n' +
    '              <!-- Botones-------------------------------------------------------------------->'+
        '            </table>')

                selUsuarioCompras(ComNumSolicitud);
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos" + data.responseText);
        }
    });
}

function abrirModal(solicitud){
	$('#modalSeguimiento').fadeIn();
	$('#NumSolicitudSeg').val(solicitud);
}

function selUsuarioCompras(NumSolicitud){
    //ComNumTipCompra
    let TipoUsuario = 28; // tipo rol
    $.ajax({
        url: './api/v1/ComEstatus.php?TipoUsuario='+TipoUsuario,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            $(json).each(function (index, item) {
                SegNumUsuario = json[index].SegNumUsuario;
                SegStrUsuario = json[index].SegStrUsuario;
                SegStrNomUsuario = json[index].SegStrNomUsuario;

                $('#btnEncargados'+NumSolicitud).append('<button class="btn btn-light btn-block" id="'+SegStrUsuario+'" value="'+NumSolicitud+'" onclick="Asignar(this.id,this.value)">'+SegStrNomUsuario+'</button>')
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(Especialidad)" + data.responseText);
        }
    });
}

function Asignar(idEncargado, numSolicitudA) {

    let esperaAsignacion = $.ajax({
        url: './api/v1/ComSolicitud.php?ComNumSolicitud='+numSolicitudA+'&SegNumUsuarioEnc='+idEncargado,
        type: "PUT",

        beforeSend: function () {

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

    $.when(esperaAsignacion).done(function () {
        let datos = {
            ComStrUsuarioAsignar:idEncargado,
            ComNumSolicitud:numSolicitudA
        };
        $.ajax({
            url: './api/v1/ComSeguimientos.php',
            type: 'POST',
            data: datos,
            beforeSend: function () {

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
    });
}


function abrirModalVerSeg(solicitud){
    var adjuntoHTML;
    $('#contSeguimientos').empty();
    let esperaSeg = $.ajax({
        url: './api/v1/ComSeguimientos.php?ComNumSolicitud='+solicitud,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json.length);
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
                    adjuntoHTML = '<a class="btn btn-info col col-sm-6" href="./docs/'+ComDictamenAdjunto+'">Descargar</a>'
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

function FormatoSolicitud(numSolCompra) {
    window.open('http://' + window.location.hostname + '/compras/runreports/ImpreSolCompra.php?NumSolicitud=' + numSolCompra);
}


$('#btnEnviarSeg').click(function () {
    var parametro = new FormData($("#formularioEnv")[0]);


    let esperaEncabezado = $.ajax({
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
            console.log(mensaje);
            let partida = mensaje.split(":");
            console.log(partida);
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

});

function abrirModalFinal(solicitud, tipoBoton){
    $('#NumSolicitudSeg').val(solicitud);
    console.log("Tipo Boton: "+ tipoBoton);
    if(tipoBoton == 'bntSeguimiento'){
        $('#btnFinalizarSeg').prop('hidden', true);
        $('#btnEnviarSeg').prop('hidden', false);
        traerInsumos(solicitud);
        $('#inputSolicitudId').val(solicitud);
        $('#btnFinalizarSeg').prop('disabled', true);
        $('#modalSeguimientoFinal').fadeIn();
    }else{
        $('#btnEnviarSeg').prop('hidden', true);
        $('#btnFinalizarSeg').prop('hidden', false);
        traerInsumos(solicitud);
        $('#inputSolicitudId').val(solicitud);
        $('#btnFinalizarSeg').prop('disabled', true);
        $('#modalSeguimientoFinal').fadeIn();
    }
}

function traerInsumos(solicitud) {

    $('#tbodyInsumoFinal').empty();
    console.log(solicitud);
    $.ajax({
        url: './api/v1/ComSolicitud.php?SolicitudId='+solicitud,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                ComNumEstatus= json[index].ComNumEstatus;
                ComStrTitulo= json[index].ComStrTitulo;
                ComNumTipCompra= json[index].ComNumTipCompra;
                ComDetSolicitud= json[index].ComDetSolicitud;
                ComIntRenAfec= json[index].ComIntRenAfec;
                ComNumCantiSoli= json[index].ComNumCantiSoli;
                ComNumCantAut= json[index].ComNumCantAut;
                ComNumCodInsu= json[index].ComNumCodInsu;
                ComStrUniMed= json[index].ComStrUniMed;
                ComNumValorEstim= json[index].ComNumValorEstim;
                ComCharContAbi= json[index].ComCharContAbi;
                ComCharIncPac= json[index].ComCharIncPac;
                ComNumSolicitud= json[index].ComNumSolicitud;
                ComUnidadDeMedida= json[index].ComUnidadDeMedida;
                ComDescripcionInsumo= json[index].ComDescripcionInsumo;
                ComEstadoFinal= json[index].ComEstadoFinal;
                $('#tbodyInsumoFinal').append('<tr>\n' +
                    '                               <td hidden>'+ComDetSolicitud+'</td>\n' +
                    '                               <td>'+ComNumCodInsu+'</td>\n' +
                    '                               <td>'+ComDescripcionInsumo+'</td>\n' +
                    '                               <td>'+ComStrTitulo+'</td>\n' +
                    '                           </tr>');

            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos()" + data.responseText);
        }
    });
}

//funcion para llenar los obtener los campos

$('#tablaInsumosFin tbody').on('dblclick', 'td', function () {
    console.log("prueba funcion");
    $('#btnReadju').prop('disabled', false);
    var data = $(this).closest('tr');
    var codInsumo = (data.find("td:eq(0)").text());
    var textEstado = (data.find("td:eq(3)").text());
    // var RegistroMed = (data.find("td:eq(1)").text());
    /*Llenar input de los datos de la tabla*/
    console.log(textEstado);
    $('#codInsumoFinal').val(codInsumo);

    if(textEstado == ''||textEstado == undefined|| textEstado == null){
        $('#codInsumoFinal').val('');
        $('#SelFinalizado').val(0);
        $('#DatFechaCompra').val('');
        $('#TextNumeroOC').val('');
        $('#DatFechaEntregaOr').val('');
        $('#DatPlazoEntrega').val('');
        $('#DatRecepcion').val('');
        $('#DatFactura').val('');
        $('#TextSerieFactura').val('');
        $('#TextNoFactura').val('');
        $('#TextNumeroFecha').val('');
        $('#TextNumeroPublicacion').val('');
        $('#NumMontoAd').val('');
        $('#NumAdjuInsumos').val('');

        $('#btnGuardarProv').prop('disabled', false);
        $('#btnReadju').prop('disabled', true);
    }else{
        console.log("se ejecuta else y ajax");
        let esperaDatos = $.ajax({
            url: './api/v1/ComAdjInsumo.php?ComDetSolicitud='+codInsumo,
            type: "GET",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            success: function (data) {
                var json = data.data;
                console.log(json);
                $(json).each(function (index, item) {
                    NumAdjuInsumos= json[index].NumAdjuInsumos;
                    DatOrdenCompra= json[index].DatOrdenCompra;
                    NumOC= json[index].NumOC;
                    DatOrdenCompraProv= json[index].DatOrdenCompraProv;
                    StrPlazoEntrega= json[index].StrPlazoEntrega;
                    DatRecepcionExpAlmac= json[index].DatRecepcionExpAlmac;
                    DatFechaFactura= json[index].DatFechaFactura;
                    StrSerieFactura= json[index].StrSerieFactura;
                    StrNoFactura= json[index].StrNoFactura;
                    No1HCartaSatisfaccion= json[index].No1HCartaSatisfaccion;
                    NumPubliGuateCompras= json[index].NumPubliGuateCompras;
                    NumEstadoFinal= json[index].NumEstadoFinal;
                    NumMontoAdjudicado= json[index].NumMontoAdjudicado;
                    ComDetSolicitud= json[index].ComDetSolicitud;

                    $('#codInsumoFinal').val(ComDetSolicitud);
                    $('#SelFinalizado').val(NumEstadoFinal);
                    $('#DatFechaCompra').val(DatOrdenCompra);
                    $('#TextNumeroOC').val(NumOC);
                    $('#DatFechaEntregaOr').val(DatOrdenCompraProv);
                    $('#DatPlazoEntrega').val(StrPlazoEntrega);
                    $('#DatRecepcion').val(DatRecepcionExpAlmac);
                    $('#DatFactura').val(DatFechaFactura);
                    $('#TextSerieFactura').val(StrSerieFactura);
                    $('#TextNoFactura').val(StrNoFactura);
                    $('#TextNumeroFecha').val(No1HCartaSatisfaccion);
                    $('#TextNumeroPublicacion').val(NumPubliGuateCompras);
                    $('#NumMontoAd').val(NumMontoAdjudicado);
                    $('#NumAdjuInsumos').val(NumAdjuInsumos);
                });
            },
            error: function (data) {
                console.log("No se lograron cargar los datos(estatus fin)" + data.responseText);
            }
        });

        $.when(esperaDatos).done(function () {
            $('#btnGuardarProv').prop('disabled', true);
            $('#btnReadju').prop('disabled', false);
        });
    }

    $('#modalProveedores').fadeIn();

});


function selEstatusFin() {
    $('#SelFinalizado').empty();
    $('#SelFinalizado').append('<option value="0">Seleccione un estado</option>')
    $.ajax({
        url: './api/v1/ComEstatus.php?estatusFin=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            $(json).each(function (index, item) {
                ComNumEstatus= json[index].ComNumEstatus;
                ComStrTitulo= json[index].ComStrTitulo;
                ComNumTipCompra= json[index].ComNumTipCompra;

                $('#SelFinalizado').append('<option value="'+ComNumEstatus+'">'+ComStrTitulo+'</option>')

            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(estatus fin)" + data.responseText);
        }
    });
}

function finalPorInsumo() {
    let codInsumoFinal = $('#codInsumoFinal').val();
    let SelFinalizado = $('#SelFinalizado').val();
    let DatFechaCompra = $('#DatFechaCompra').val();
    let TextNumeroOC = $('#TextNumeroOC').val();
    let DatFechaEntregaOr = $('#DatFechaEntregaOr').val();
    let DatPlazoEntrega = $('#DatPlazoEntrega').val();
    let DatRecepcion = $('#DatRecepcion').val();
    let DatFactura = $('#DatFactura').val();
    let TextSerieFactura = $('#TextSerieFactura').val();
    let TextNoFactura = $('#TextNoFactura').val();
    let TextNumeroFecha = $('#TextNumeroFecha').val();
    let TextNumeroPublicacion = $('#TextNumeroPublicacion').val();
    let NumMontoAd = $('#NumMontoAd').val();

    if(SelFinalizado==0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Debe seleccionar un estado final',
        });
        return 0;
    }


    let datosFin = {
        DatOrdenCompra:DatFechaCompra,
        NumOC:TextNumeroOC,
        DatOrdenCompraProv:DatFechaEntregaOr,
        StrPlazoEntrega:DatPlazoEntrega,
        DatRecepcionExpAlmac:DatRecepcion,
        DatFechaFactura:DatFactura,
        StrSerieFactura:TextSerieFactura,
        StrNoFactura:TextNoFactura,
        No1HCartaSatisfaccion:TextNumeroFecha,
        NumPubliGuateCompras:TextNumeroPublicacion,
        NumEstadoFinal:SelFinalizado,
        NumMontoAdjudicado:NumMontoAd,
        ComDetSolicitud: codInsumoFinal
    };

    console.log("------ objeto datos final por insumo");
    console.log(datosFin);

    $.ajax({
        url: './api/v1/ComAdjInsumo.php',
        type: 'POST',
        data: datosFin,

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
            $('#btnGuardarProv').prop('disabled', true);
            console.log(response.state.codstate)
            if(response.state.codstate == 1){
                ActualizarEstadoFinalDet(codInsumoFinal, SelFinalizado);
            }
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
            //$("#btnGuardar").text('GUARDAR').attr('disabled', false);
        }
    });
}

$('#btnGuardarProv').click(function () {
    finalPorInsumo();
});


function selEstadoCambio(valor) {
    if(valor==60 || valor==61){

        $('#NumMontoAd').val(0);
    }
}

function ActualizarEstadoFinalDet(ComNumDetSolicitud, CopmNumEstados) {
    $.ajax({
        url: './api/v1/ComEstatus.php?ComDetSolicitud='+ComNumDetSolicitud+'&ComEstadoFinal='+CopmNumEstados,
        type: "PUT",

        beforeSend: function () {

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
        }
    });//fin ajax PUT
}

$('#btnValidarFinal').dblclick(function () {
    var validado = true;
    let solicitud = $('#inputSolicitudId').val();
    let esperarValidacion = $.ajax({
        url: './api/v1/ComSolicitud.php?SolicitudId='+solicitud,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                ComNumEstatus= json[index].ComNumEstatus;
                ComStrTitulo= json[index].ComStrTitulo;
                ComNumTipCompra= json[index].ComNumTipCompra;
                ComDetSolicitud= json[index].ComDetSolicitud;
                ComIntRenAfec= json[index].ComIntRenAfec;
                ComNumCantiSoli= json[index].ComNumCantiSoli;
                ComNumCantAut= json[index].ComNumCantAut;
                ComNumCodInsu= json[index].ComNumCodInsu;
                ComStrUniMed= json[index].ComStrUniMed;
                ComNumValorEstim= json[index].ComNumValorEstim;
                ComCharContAbi= json[index].ComCharContAbi;
                ComCharIncPac= json[index].ComCharIncPac;
                ComNumSolicitud= json[index].ComNumSolicitud;
                ComUnidadDeMedida= json[index].ComUnidadDeMedida;
                ComDescripcionInsumo= json[index].ComDescripcionInsumo;
                ComEstadoFinal= json[index].ComEstadoFinal;
                if(ComEstadoFinal == null || ComEstadoFinal == undefined || ComEstadoFinal == ''){
                    validado = false;
                }
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos()" + data.responseText);
        }
    });

    $.when(esperarValidacion).done(function () {
        if(validado == true){
            $('#btnFinalizarSeg').prop('disabled', false);
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Hay insumos sin estado final, favor verificar',
            });
            return 0;
        }
    });

});


$('#btnReadju').dblclick(function () {

    let textObs=$('#textObs').val();
    let NumAdjuInsumos=$('#NumAdjuInsumos').val();

    let datos= {
        StrObservaciones:textObs,
        NumAdjuInsumo:NumAdjuInsumos
    };

    console.log(datos);
    $.ajax({
        url: './api/v1/ComReAdjudicacion.php',
        type: 'POST',
        data: datos,
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
            $('#btnReadju').prop('disabled', true);
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
});
