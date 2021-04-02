$(document).ready(function (){
    cargarPartidas();
    mostrarSolPresu();
});


function abrAgrSeg(NumSolicitud) {
    console.log(NumSolicitud);
    $('#NumSolicitudSeg').val(NumSolicitud);
    $('#modalSeguimiento').fadeIn();
}

function autSol(numSolicitud) {
    /*----Funcion colocar fecha----*/
    var f = new Date();
    if(f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-" + f.getDate());
        $('#datAgPartida').val(fecha);
        //$('#inputFecha').val(fecha);
        //console.log(fecha);
    }else {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#datAgPartida').val(fecha);
        //$('#inputFecha').val(fecha);
        //console.log(fecha);
    }
    /*----FIn Funcion colocar fecha----*/
    selPrograma();
    selSubPrograma();
    selSubProducto();
    $('#numSolPedido').val(numSolicitud);
    $('#modalPartPresu').fadeIn();
}

function recSol() {

}

function agrFila() {
    let programa = $('#sltProg').val();
    let subPrograma = $('#sltSubPro').val();
    let proyecto = $('#inputProy').val();
    let actividad = $('#inputAct').val();
    let obra = $('#inputObr').val();
    let renglon = $('#inputReng').val();
    let ubGeog = $('#inputUbiGeo').val();
    let ftFin = $('#inputFueFin').val();
    let total =$('#inputTotal').val();
    let subproducto = $('#sltSubProducto').val();
    let sltParPres = $('#sltParPres').val(); // Id que trae toda la partida
    let numSolPedido = $('#numSolPedido').val();
    let datAgPartida = $('#datAgPartida').val();
    let inputDescripcion = $('#inputDescripcion').val();

    if(programa == null || programa == '0'){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Programa no puede ir vacío favor verificar',
        });

    }else if(subPrograma == null || subPrograma == '0'){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Sub-Programa no puede ir vacío favor verificar',
        });
    }else if(subproducto == null || subproducto == '0'){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Sub-Producto no puede ir vacío favor verificar',
        });
    }else if(sltParPres == null || sltParPres == '0'){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Debe Seleccionar una partida presupustaria',
        });
    }else if(total == null || total == undefined || total == ''){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Total no puede ir vacío favor verificar',
        });
    }else if(parseFloat($('#inputDisponible').val()) < parseFloat($('#inputTotal').val())){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'La cantidad disponible es menor a la ingresada, favor verificar',
        });
    }else {
        $('#tbodyTablaAut').append('' +
            ' <tr class="text-center">\n' +
            '<td hidden>' + sltParPres + '</td>\n' +
            '<td hidden>' + numSolPedido + '</td>\n' +
            '<td >' + datAgPartida + '</td>\n' +
            '<td>' + programa + '</td>\n' +
            '<td>' + subPrograma + '</td>\n' +
            '<td>' + proyecto + '</td>\n' +
            '<td>' + actividad + '</td>\n' +
            '<td>' + obra + '</td>\n' +
            '<td>' + renglon + '</td>\n' +
            '<td>' + ubGeog + '</td>\n' +
            '<td>' + ftFin + '</td>\n' +
            '<td>' + total + '</td>\n' +
            '<td>' + subproducto + '</td>\n' +
            '<td>' + inputDescripcion + '</td>\n' +
            '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'+
            ' </tr>')

        $('#sltProg').val('0');
        $('#sltSubPro').val('0');
        $('#inputProy').val('');
        $('#inputAct').val('');
        $('#inputObr').val('');
        $('#inputReng').val('');
        $('#inputUbiGeo').val('');
        $('#inputFueFin').val('');
        $('#inputTotal').val('');
        $('#sltSubProducto').val('0');
        $('#sltParPres').val('0');
        $('#inputDescripcion').val('');

    }

}

function mostrarSolPresu(){
    $('#tbodySolPresu').empty();
    console.log("ejecucion mostrar");
    $.ajax({
        url: './api/v1/ComSolicitud.php?SolAutorizaPresu=true',
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
                idSolicitante=json[index].idSolicitante;
                ComStrDepto=json[index].ComStrDepto;
                ComStrTitulo=json[index].ComStrTitulo;
                NumAutorizacion=json[index].NumAutorizacion;
                ComStrDetalleComp=json[index].ComStrDetalleComp;
                Encargado=json[index].Encargado;
                idEncargado=json[index].idEncargado;
                AnioSolicitud=json[index].AnioSolicitud;
                Correlativo=json[index].Correlativo;


                $('#tbodySolPresu').append('<tr>\n' +
                    '                            <td>'+Correlativo+'-'+AnioSolicitud+'</td>\n' +
                    '                            <td>'+Solicitante+'</td>\n' +
                    '                            <td class="bajarTexto">'+ComStrDepto+'</td>\n' +
                    '                            <td>'+ComStrTitulo+'</td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-download" type="button" style="color: #007e33" id="'+ComNumSolicitud+'" name="btnAdjuntar" onclick="FormatoSolicitud(this.id)"></i></h4></td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-plus" type="button" style="color: orange" onclick="abrAgrSeg('+ComNumSolicitud+');" id="btnSeg-'+ComNumSolicitud+'" name="btnAgregarSeg'+ComNumSolicitud+'" value="'+ComNumSolicitud+'"></i></h4></td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-check" type="button" style="color: royalblue" onclick="autSol('+ComNumSolicitud+');" id="btnAut-'+ComNumSolicitud+'" name="btnAutorizar'+ComNumSolicitud+'" value="'+ComNumSolicitud+'"></i></h4></td>\n' +
                    '                            <td class="centrarCont"><h4><i class="fas fa-times" type="button" style="color: red" onclick="recSol('+ComNumSolicitud+')" id="btnRec-'+ComNumSolicitud+'" name="btnRechazar-'+ComNumSolicitud+'" value="'+ComNumSolicitud+'"></i></h4></td>\n' +
                    '                            <td class="centrarCont">' +
                    '<select class="form-control" id="selCambioDep" onchange="cambiarDep(this.value)">' +
                    '<option value="0">Seleccione</option>' +
                    '<option value="'+ComNumSolicitud+'-GF-'+NumAutorizacion+'" id="GF">Gerencia Financiera</option>' +
                    '<option value="'+ComNumSolicitud+'-DE-'+NumAutorizacion+'" id="DE">Direccion</option>' +
                    '</select><td>\n' +
                    '                        </tr>');
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(tipoCompra)" + data.responseText);
        }
    });
}

function FormatoSolicitud(numSolCompra) {
    window.open('http://' + window.location.hostname + '/sysfin/runreports/ImpreSolCompra.php?NumSolicitud=' + numSolCompra);
}


$('#btnEnviarSeg').click(function (){
    InsSeguimiento();
});

function cargarPartidas() {
    $('#sltParPres').empty();
    $('#sltParPres').append('<option value="0">Seleccione</option>');
    $.ajax({
        url: './api/v1/PresuPartida.php?mostPartida=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                    NumPartida=json[index].NumPartida;
                    NumProyecto=json[index].NumProyecto;
                    NumActividad=json[index].NumActividad;
                    NumObra=json[index].NumObra;
                    StrUbgo=json[index].StrUbgo;
                    StrFieFin=json[index].StrFieFin;
                    NumPrograma=json[index].NumPrograma;
                    NumSubPrograma=json[index].NumSubPrograma;
                    NumRenglon=json[index].NumRenglon;
                    NumAsignado=json[index].NumAsignado; //asignado no esta dentro del select
                    NumSubProducto=json[index].NumSubProducto;
                    NumOrg=json[index].NumOrg;
                    NumCorr=json[index].NumCorr;

                    $('#sltParPres').append('<option value="'+NumPartida+'" >'+NumProyecto+' - '+NumActividad+' - '+NumObra+' - ' +
                        ''+StrUbgo+' - '+StrFieFin+' - '+NumPrograma+' - ' +
                        ''+NumSubPrograma+' - '+NumRenglon+' - '+NumSubProducto+' - ' +
                        ''+NumOrg+' - '+NumCorr+'</option>');
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(mostrar partida)" + data.responseText);
        }
    });

}


function traerPartida(numPartida) {
    console.log("traerPartida")
    $.ajax({
        url: './api/v1/PresuPartida.php?numPartida='+numPartida,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                NumPartida=json[index].NumPartida;
                NumProyecto=json[index].NumProyecto;
                NumActividad=json[index].NumActividad;
                NumObra=json[index].NumObra;
                StrUbgo=json[index].StrUbgo;
                StrFieFin=json[index].StrFieFin;
                NumPrograma=json[index].NumPrograma;
                NumSubPrograma=json[index].NumSubPrograma;
                NumRenglon=json[index].NumRenglon;
                NumAsignado=json[index].NumAsignado;
                NumSubProducto=json[index].NumSubProducto;
                NumOrg=json[index].NumOrg;
                NumCorr=json[index].NumCorr;

                $('#sltProg').val(NumPrograma);
                $('#sltSubPro').val(NumSubPrograma);
                $('#inputProy').val(NumProyecto);
                $('#inputAct').val(NumActividad);
                $('#inputObr').val(NumObra);
                $('#inputReng').val(NumRenglon);
                $('#inputUbiGeo').val(StrUbgo);
                $('#inputFueFin').val(StrFieFin);
                $('#sltSubProducto').val(NumSubProducto);
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(mostrar partida)" + data.responseText);
        }
    });
}

$('#btnAutPar').click(function (){

    var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyTablaAut tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });

    console.log(tableInfo);

    for (let j = 0; j < tableInfo.length; j++) {
        console.log("solo nombre: " + tableInfo[j][1]);

        let datosDetalle = {
            DatRegistro: tableInfo[j][2],
            StrTipoDocumento: 'SOL.PED',
            StrNoDocumento: tableInfo[j][1],
            StrDescripcion: tableInfo[j][13],
            NumApModPresupuestaria: 0,
            NumSolPedido: tableInfo[j][11],
            NumRegCompremetido: 0,
            NumRegDengado: 0,
            NumRegPagado: 0,
            NumSaldoComprometer: 0,
            NumSaldoDevegar: 0,
            NumSaldoPagado: 0,
            NumPartida: tableInfo[j][0]

        };
        console.log("cada datosDetalle enviado");
        console.log(datosDetalle)

        $.ajax({
            url: './api/v1/PresuDetTarjeta.php',
            type: 'POST',
            data: datosDetalle,
            beforeSend: function () {

            },
            success: function (response) {
                Swal.fire({
                    position: 'top-end',
                    icon: swichSuccessWarning(response.state.codstate),
                    title: titulosMensaje(response.state.codstate),
                    text: response.state.strstate,
                    showConfirmButton: false,
                    timer: 2000
                });
            },
            error: function (request, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: ' '+ request.responseText +' - '+ request.state.strstate,
                });
            }
        });
    }
});

function cambiarDep(valor){

    let partida = valor.split("-");
    let numSolicitud = partida[0];
    let tipoAutorizaciones = partida[1];
    let numAutorizacion = partida[2];

    console.log(numSolicitud);
    console.log(tipoAutorizaciones);
    console.log(numAutorizacion);

    if(numSolicitud == '0' || numSolicitud == 0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Seleccione un departamento',
        });
        return 0;
    } else if(tipoAutorizaciones == 'GF'){
        //Gerencia Financiera
        let datos = {
            StrAutorizaGF: 'GF',
            NumSolPedido: numSolicitud
        };

        $.ajax({
            url: './api/v1/PresuAutorizacion.php',
            type: 'POST',
            data: datos,
            beforeSend: function () {

            },
            success: function (response) {
                Swal.fire({
                    position: 'top-end',
                    icon: swichSuccessWarning(response.state.codstate),
                    title: titulosMensaje(response.state.codstate),
                    text: response.state.strstate,
                    showConfirmButton: false,
                    timer: 2000
                });
            },
            error: function (request, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: ' '+ request.responseText +' - '+ request.state.strstate,
                });
            }
        });
    }else if(tipoAutorizaciones == 'DE'){

     if(numAutorizacion == null || numAutorizacion == 'null'){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No puede tarsladar la solicitud a Direccion sin autorizacion de Gerencia Financiera',
            });
            return 0;
        }else{
         //Direccion Ejecutiva
         console.log(numAutorizacion + 'en direccion');
         $.ajax({
             url: './api/v1/PresuAutorizacion.php?NumAutorizacion='+numAutorizacion+'&insDireccion=true&Depto=DE',
             type: "PUT",

             beforeSend: function () {

             },
             success: function (response) {
                 Swal.fire({
                     position: 'top-end',
                     icon: swichSuccessWarning(response.state.codstate),
                     title: titulosMensaje(response.state.codstate),
                     text: response.state.strstate,
                     showConfirmButton: false,
                     timer: 2000
                 });

             },
             error: function (request, status, error) {
                 console.log(request);
                 Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: ' '+ request.responseText +' - '+ request.state.strstate,
                 });
             }
         });//fin ajax PUT
     }

    }
}
