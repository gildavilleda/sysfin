    $(document).ready(function (){
        selPrograma();
        selSubPrograma();
        selSubProducto();
        mostrarTblGeneral();
        cargarPartidas();
    });

function mostrarTblGeneral(){
    $('#tbodyPresu').empty();

    $.ajax({
        url: './api/v1/PresuPresupuesto.php?principal=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            $(json).each(function (index, item) {
                NumPartida= json[index].NumPartida;
                NumProyecto= json[index].NumProyecto;
                NumActividad= json[index].NumActividad;
                NumObra= json[index].NumObra;
                StrUbgo= json[index].StrUbgo;
                StrFieFin= json[index].StrFieFin;
                NumPrograma= json[index].NumPrograma;
                NumSubPrograma= json[index].NumSubPrograma;
                NumRenglon= json[index].NumRenglon;
                NumAsignado= json[index].NumAsignado;
                NumSubProducto= json[index].NumSubProducto;
                NumOrg= json[index].NumOrg;
                NumCorr= json[index].NumCorr;

                $('#tbodyPresu').append('<tr>\n' +
                        '<td>'+NumPartida+'</td>\n' + //id de patida
                        '<td>'+NumPrograma+'</td>\n' +
                        '<td>'+NumSubPrograma+'</td>\n' +
                        '<td>'+NumProyecto+'</td>\n' +
                        '<td>'+NumActividad+'</td>\n' +
                        '<td>'+NumObra+'</td>\n' +
                        '<td>'+NumSubProducto+'</td>\n' +
                        '<td>'+NumRenglon+'</td>\n' +
                        '<td>'+StrUbgo+'</td>\n' +
                        '<td>'+StrFieFin+'</td>\n' +
                        '<td>'+NumOrg+'</td>\n' +
                        '<td>'+NumCorr+'</td>\n' +
                        '<td>'+NumAsignado+'</td>\n' +
                    '</tr>');
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(datosPartida)" + data.responseText);
        }
    });
}

$('#tblPresu tbody').on('dblclick', 'td', function () {
    console.log("Hola")
    let datosPre = $(this).closest('tr');
    let numPartida = (datosPre.find("td:eq(0)").text());
    var pg = (datosPre.find("td:eq(1)").text());
    let spg = (datosPre.find("td:eq(2)").text());
    let py = (datosPre.find("td:eq(3)").text());
    let act = (datosPre.find("td:eq(4)").text());
    let ob = (datosPre.find("td:eq(5)").text());
    let subProd = (datosPre.find("td:eq(6)").text());
    let REN = (datosPre.find("td:eq(7)").text());
    let UG = (datosPre.find("td:eq(8)").text());
    let fte = (datosPre.find("td:eq(9)").text());
    let org = (datosPre.find("td:eq(10)").text());
    let corr = (datosPre.find("td:eq(11)").text());
    let asignado = (datosPre.find("td:eq(12)").text());
    let debitos = (datosPre.find("td:eq(13)").text());
    let creditos = (datosPre.find("td:eq(14)").text());
    let vigente = (datosPre.find("td:eq(15)").text());
    let solPedCom = (datosPre.find("td:eq(16)").text());
    let comprometido = (datosPre.find("td:eq(17)").text());
    let devengado = (datosPre.find("td:eq(18)").text());
    let pagado = (datosPre.find("td:eq(19)").text());
    let saldoPreCom = (datosPre.find("td:eq(20)").text());
    let saldoDisp = (datosPre.find("td:eq(21)").text());
    mostrarDetalleTarjeta(numPartida);
    abrModTab(numPartida, pg, spg, py, act, ob, subProd, REN, UG, fte, org, corr, asignado, debitos, creditos,vigente, solPedCom, comprometido, devengado, pagado, saldoPreCom, saldoDisp);
    //console.log(pg, spg)
    mostrarDetModificacion(numPartida);

});



function abrModTab(numPartida, pg, spg, py, act, ob, subProd, REN, UG, fte, org, corr, asignado, debitos, creditos,vigente, solPedCom, comprometido, devengado, pagado, saldoPreCom, saldoDisp) {

    let proSubPro = pg + '-' + spg;
    let proActObr = py + '-' + act+ '-' + ob;
    console.log(proSubPro)
    $('#inputNumPartida').val(numPartida).addClass('cH');;
    $('#inputProg-SubPro').val(proSubPro).addClass('cH');
    $('#inputProy-Act-Obra').val(proActObr).addClass('cH');
    $('#inputFueFin').val(fte).addClass('cH');
    $('#inputRenglón').val(REN).addClass('cH');
    $('#inputSubProducto').val(subProd).addClass('cH');
    $('#inputUbcGeo').val(UG).addClass('cH');
    $('#contenidoTarje').fadeIn();
}


function canMod() {
    $('#modDetTar').fadeOut();
}

$('#btnAgrPar').click(function (){

    if( $('#btnAgrPar').text() == 'Agregar partida'){
        let sltPrograma= $('#sltProg').val();
        let sltSubPrograma= $('#sltSubPro').val();
        let inputProyecto= $('#inputPro').val();
        let inputActividad= $('#inputAct').val();
        let inputObrPart= $('#inputObrPart').val();
        let inputUbiGeo= $('#inputUbiGeo').val();
        let inputFteFin= $('#inputFteFin').val();
        let sltSubProducto= $('#sltSubProducto ').val();
        let inputRenglon= $('#inputRenglon ').val();
        let inputAsignado = $('#inputAsignado').val();
        let inputOrg = $('#inputOrg').val();
        let inputCorre = $('#inputCorre').val();


        if(sltPrograma == '0' || sltPrograma == null || sltPrograma == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo programa vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(sltSubPrograma == '0' || sltSubPrograma == null || sltSubPrograma == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo subprograma vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(inputProyecto == '' || inputProyecto == null || inputProyecto == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo proyecto vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(inputActividad == '' || inputActividad == null || inputActividad == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo actividad vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(inputObrPart == '' || inputObrPart == null || inputObrPart == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo obra vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(sltSubProducto == '0' || sltSubProducto == null || sltSubProducto == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo subprograma vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(inputRenglon == '' || inputRenglon == null || inputRenglon == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo renglón vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(inputUbiGeo == '' || inputUbiGeo == null || inputUbiGeo == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo ubicación geográfica vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(inputFteFin == '' || inputFteFin == null || inputFteFin == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo fuente de financiamiento vacío',
                showConfirmButton: true,
            });
            return false;
        }
        if(inputAsignado == '' || inputAsignado == null || inputAsignado == undefined){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campo organismo vacío',
                showConfirmButton: true,
            });
            return false;
        }

        let datos = {
            NumProyecto:inputProyecto,
            NumActividad:inputActividad,
            NumObra:inputObrPart,
            StrUbgo:inputUbiGeo,
            StrFieFin:inputFteFin,
            NumAsignado:inputAsignado,
            NumPrograma:sltPrograma,
            NumSubPrograma:sltSubPrograma,
            NumRenglon:inputRenglon,
            NumSubProducto:sltSubProducto,
            NumOrg:inputOrg,
            NumCorr:inputCorre
        };

        console.log(datos);

        $.ajax({
            url: './api/v1/PresuPartida.php',
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

                $('#btnAgrPar').text("Nueva partida");
                $('#btnAgrPar').removeClass('btn-info');
                $('#btnAgrPar').addClass('btn-danger');

            },
            error: function (request, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: ' '+ request.responseText +' - '+ request.state.strstate,
                });
            }
        });
    }else if($('#btnAgrPar').text() == 'Nueva partida'){
        $('#sltProg').val('0');
        $('#sltSubPro').val('0');
        $('#inputPro').val('');
        $('#inputAct').val('');
        $('#inputObrPart').val('');
        $('#inputUbiGeo').val('');
        $('#inputFteFin').val('');
        $('#sltSubProducto ').val('0');
        $('#inputRenglon ').val('');
        $('#inputMontoTotal').val('');
        $('#inputOrg').val('');
        $('#inputCorre').val('');
        $('#inputAsignado').val('');

        $('#btnAgrPar').text("Agregar partida");
        $('#btnAgrPar').removeClass('btn-danger');
        $('#btnAgrPar').addClass('btn-info');
    }

});

function abrModNuePart(){
    $('#modNuePart').fadeIn();
}

$('#btnNueAgrDet').click(function () {
    /*----Funcion colocar fecha----*/
    var f = new Date();
    if(f.getMonth() +1 <=9){
        if(f.getDate() <=9){
            let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-0" + f.getDate());
            $('#inputFecReg').val(fecha);
            //$('#inputFechRegis').val(fecha);
            //console.log(fecha);
        }else{
            let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-" + f.getDate());
            $('#inputFecReg').val(fecha);
           // $('#inputFechRegis').val(fecha);
            //console.log(fecha);
        }
    }else {
        if(f.getDate() <=9){
            let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
            $('#inputFecReg').val(fecha);
           // $('#inputFechRegis').val(fecha);
            //console.log(fecha);
        }else{
            let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate());
            $('#inputFecReg').val(fecha);
            //$('#inputFechRegis').val(fecha);
            //console.log(fecha);
        }

    }
    /*----Funcion colocar fecha----*/


    $('#inputTarjeta').val($('#inputNumPartida').val());
    $('#modDetTar').fadeIn();
});

$('#btnAgrDet').click(function () {
    let  inputTarjeta= $('#inputTarjeta').val();
    let  inputFecReg= $('#inputFecReg').val();
    let  inputTipDoc= $('#inputTipDoc').val();
    let  inputNoDoc= $('#inputNoDoc').val();
    let  inputDescripcion= $('#inputDescripcion').val();
    let  inputApeModPre= 0;
    let  inputSolPed= $('#inputSolPed').val();
    let  inputComReg= $('#inputComReg').val();
    let  inputDevReg= $('#inputDevReg').val();
    let  inputPagReg= $('#inputPagReg').val();
    let  inputComSal= $('#inputComSal').val();
    let  inputDevSal= $('#inputDevSal').val();
    let  inputPagSal= $('#inputPagSal').val();

    let datos = {
        NumPartida:inputTarjeta, // Id Partida, se llama detalle de tarjeta pero hereda id partida y ahi se hace la relacion
        DatRegistro:inputFecReg,
        StrTipoDocumento:inputTipDoc,
        StrNoDocumento:inputNoDoc,
        StrDescripcion:inputDescripcion,
        NumApModPresupuestaria:inputApeModPre,
        NumSolPedido:inputSolPed,
        NumRegCompremetido:inputComReg,
        NumRegDengado:inputDevReg,
        NumRegPagado:inputPagReg,
        NumSaldoComprometer:inputComSal,
        NumSaldoDevegar:inputDevSal,
        NumSaldoPagado:inputPagSal
    };

    if(inputTipDoc =='0' || inputTipDoc ==0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor seleccione un Tipo de Documento',
        });
        return 0;
    }else if(inputNoDoc == null || inputNoDoc == undefined || inputNoDoc == ''){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor Ingrese el Numero de Documento',
        });
        return 0;
    }else{
        $.ajax({
            url: './api/v1/PresuDetTarjeta.php',
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
    }
});
/*
function mostrarCampos(id) {
    if(id == 1){
        $('#tituloRegistroDel').prop('hidden', false);
        $('#registrosDel').prop('hidden', false);
        $('#tituloSaldoPor').prop('hidden', true);
        $('#soldaPor').prop('hidden', true);
    }else{
        $('#tituloSaldoPor').prop('hidden', false);
        $('#soldaPor').prop('hidden', false);
        $('#tituloRegistroDel').prop('hidden', true);
        $('#registrosDel').prop('hidden', true);
    }
}*/

function mostrarDetalleTarjeta(numPartida) {
    console.log(numPartida);
    $('#tbodyDetTarjeta').empty();

    $.ajax({
        url: './api/v1/PresuDetTarjeta.php?mostTabla=true&numPartida='+numPartida,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                NumDetTarjeta= json[index].NumDetTarjeta;
                DatRegistro= json[index].DatRegistro;
                StrTipoDocumento= json[index].StrTipoDocumento;
                StrNoDocumento= json[index].StrNoDocumento;
                StrDescripcion= json[index].StrDescripcion;
                NumApModPresupuestaria= json[index].NumApModPresupuestaria;
                NumSolPedido= json[index].NumSolPedido;
                NumRegComprometido= json[index].NumRegComprometido;
                NumRegDengado= json[index].NumRegDengado;
                NumRegPagado= json[index].NumRegPagado;
                NumSaldoComprometer= json[index].NumSaldoComprometer;
                NumSaldoDevengar= json[index].NumSaldoDevengar;
                NumSaldoPagado= json[index].NumSaldoPagado;
                NumPartida= json[index].NumPartida;

                let NumSolPedidos = parseFloat(NumSolPedido).toFixed(2);
                let aperModPresu = parseFloat(NumApModPresupuestaria).toFixed(2);
                let comprometidoSal = parseFloat(NumRegComprometido).toFixed(2);
                let devengadoSal = parseFloat(NumRegDengado).toFixed(2);
                let pagadoSal = parseFloat(NumRegPagado).toFixed(2);
                let comprometerSal = parseFloat(NumSaldoComprometer).toFixed(2);
                let devengarSal = parseFloat(NumSaldoDevengar).toFixed(2);
                let PagarSal = parseFloat(NumSaldoPagado).toFixed(2);

                $('#tbodyDetTarjeta').append(' <tr>\n' +
                    '                    <td>'+DatRegistro+'</td>\n' +
                    '                    <td>'+StrTipoDocumento+'</td>\n' +
                    '                    <td>'+StrNoDocumento+'</td>\n' +
                    '                    <td>'+StrDescripcion+'</td>\n' +
                    '                    <td>'+aperModPresu+'</td>\n' +
                    '                    <td>'+NumSolPedidos+'</td>\n' +
                    '                    <td>'+comprometidoSal+'</td>\n' +
                    '                    <td>'+devengadoSal+'</td>\n' +
                    '                    <td>'+pagadoSal+'</td>\n' +
                    '                    <td>'+comprometerSal+'</td>\n' +
                    '                    <td>'+devengarSal+'</td>\n' +
                    '                    <td>'+PagarSal+'</td>\n' +
                    '                </tr>');
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(datosDetTarjeta)" + data.responseText);
        }
    });
}

function mostDet() {
    $('#modPresMod').fadeIn();

    /*----Funcion colocar fecha----*/
    var f = new Date();
    if(f.getMonth() +1 <=9){
        if(f.getDate() <=9){
            let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-0" + f.getDate());
            $('#inputFechaReg').val(fecha);
            $('#inputFechRegis').val(fecha);
            $('#inptFechReg').val(fecha);
            //console.log(fecha);
        }else{
            let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-" + f.getDate());
            $('#inputFechaReg').val(fecha);
            $('#inputFechRegis').val(fecha);
            $('#inptFechReg').val(fecha);
            //console.log(fecha);
        }
    }else {
        if(f.getDate() <=9){
            let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
            $('#inputFechaReg').val(fecha);
            $('#inputFechRegis').val(fecha);
            $('#inptFechReg').val(fecha);
            //console.log(fecha);
        }else{
            let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate());
            $('#inputFechaReg').val(fecha);
            $('#inputFechRegis').val(fecha);
            $('#inptFechReg').val(fecha);
            //console.log(fecha);
        }

    }
    /*----Funcion colocar fecha----*/

}

function selTipoDocu(valor){
    if(valor == 'OC'){
        $('#inputComReg').removeClass('cH');
        $('#inputDevReg').addClass('cH');
        $('#inputPagReg').addClass('cH');

        $('#inputComReg').val('0.00');
        $('#inputDevReg').val('0.00');
        $('#inputPagReg').val('0.00');
    }
    if(valor == 'FACT'){
        $('#inputComReg').addClass('cH');
        $('#inputDevReg').removeClass('cH');
        $('#inputPagReg').removeClass('cH');

        $('#inputComReg').val('0.00');
        $('#inputDevReg').val('0.00');
        $('#inputPagReg').val('0.00');


    }if(valor == 'SOL.CH'){
        $('#inputComReg').removeClass('cH');
        $('#inputDevReg').removeClass('cH');
        $('#inputPagReg').removeClass('cH');

        $('#inputComReg').val('0.00');
        $('#inputDevReg').val('0.00');
        $('#inputPagReg').val('0.00');

    }
    if(valor == 'LIQ'){
        $('#inputComReg').removeClass('cH');
        $('#inputDevReg').addClass('cH');
        $('#inputPagReg').addClass('cH');

        $('#inputComReg').val('0.00');
        $('#inputDevReg').val('0.00');
        $('#inputPagReg').val('0.00');
    }
    if(valor == 'CYD'){
        $('#inputComReg').removeClass('cH');
        $('#inputDevReg').removeClass('cH');
        $('#inputPagReg').removeClass('cH');
    }
    if(valor == 'REV'){
        $('#inputComReg').removeClass('cH');
        $('#inputDevReg').addClass('cH');
        $('#inputPagReg').addClass('cH');

        $('#inputComReg').val('0.00');
        $('#inputDevReg').val('0.00');
        $('#inputPagReg').val('0.00');
    }
    if(valor == 'PROG'){
        $('#colSolPeido').prop('hidden', false);
        $('#inputSolPed').removeClass('cH');
        $('#inputComReg').addClass('cH');
        $('#inputDevReg').addClass('cH');
        $('#inputPagReg').addClass('cH');

        $('#inputComReg').val('0.00');
        $('#inputDevReg').val('0.00');
        $('#inputPagReg').val('0.00');
    }
}

function cargarPartidas() {
    $('#sltPartPresu').empty();
    $('#sltPartPresu').append('<option value="0">Seleccione</option>')
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
                NumAsignado=json[index].NumAsignado;
                NumSubProducto=json[index].NumSubProducto;
                NumOrg=json[index].NumOrg;
                NumCorr=json[index].NumCorr;

                $('#sltPartPresu').append('<option value="'+NumPartida+'" >'+NumProyecto+' - '+NumActividad+' - '+NumObra+'</option>');
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(mostrar partida)" + data.responseText);
        }
    });
}

function mostrarDetModificacion(numPartida) {
    $('#inputPartida').val(numPartida);
    $('#inputNumPartidaCred').val(numPartida);
    $('#inputNumPartidaDeb').val(numPartida);

    console.log(numPartida);
    $('#tBodyPresuMod').empty();

    $.ajax({
        url: './api/v1/PresuResumenMovimiento.php?NumPartida='+numPartida,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                DateRegistro = json[index].DateRegistro;
                NumInicial = json[index].NumInicial;
                NumModPres = json[index].NumModPres;
                NumPrepVig = json[index].NumPrepVig;
                StrCompMod = json[index].StrCompMod;
                DateFechaComp = json[index].DateFechaComp;
                NumPartida = json[index].NumPartida;

                var saldoInicial = 0
                if (NumInicial > 0){
                    saldoInicial = parseFloat(NumInicial).toFixed(2);
                } else {
                    saldoInicial = ' ';
                }

                let presuVigete  = parseFloat(NumPrepVig).toFixed(2);

            $('#tBodyPresuMod').append('<tr>\n' +
                '<td>'+DateRegistro+'</td>\n' +
                '<td>'+saldoInicial+'</td>\n' +
                '<td>'+NumModPres+'</td>\n' +
                '<td>'+presuVigete+'</td>\n' +
                '<td>'+StrCompMod+'</td>\n' +
                '<td>'+DateFechaComp+'</td>\n' +
            '</tr>')
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(mostrar partida)" + data.responseText);
        }
    });

    obtDatos(numPartida);
}

function obtDatos(PartidaPRes) {

    console.log(PartidaPRes);

    $.ajax({
        url: './api/v1/PresuResumenMovimiento.php?PartPres='+PartidaPRes,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                NumPrepVig = json[index].NumPrepVig;

                $('#inputSalIni').val(NumPrepVig).addClass('cH');
                $('#inputSaldoIni').val(NumPrepVig).addClass('cH');
                $('#inptSaldIni').val(NumPrepVig).addClass('cH');
                
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(mostrar partida)" + data.responseText);
        }
    });
    
}

function opeCant() {

    let saldIni = $('#inputSalIni').val();
    let modPres = $('#inputModPre').val();

    let modParse = parseFloat(modPres);

    console.log(saldIni);
    console.log(modParse);

    if (modParse > saldIni){
        Swal.fire({
            icon: 'warning',
            title: 'Favor verificar el monto',
            text: 'Modificación Presupuestaria es mayor que Saldo Inicial',

        })
        $('#inputModPre').val('').removeClass('cH');
        $('#inputPresVig').val('').removeClass('cH');
    }
    else{
        var suma = 0;

        suma = saldIni - modPres;

        let sumaParse = parseFloat(suma).toFixed(2);

        let modParse = parseFloat(modPres).toFixed(2);

       $('#inputPresVig').val(sumaParse).addClass('cH');
        $('#inputModPre').val(modParse).addClass('cH');
        $('#inputSalFlo').val(modParse).addClass('cH');

    }

}

$('#btnBloquear').click(function () {

    let fechaRegistro = $('#inputFechaReg').val();
    let modPresu = $('#inputModPre').val();
    let DocMod = $('#inputDocMod').val();
    let noDocMod = $('#inputNoDocMod').val();
    let FecComp = $('#inputFecCom').val();
    let descripcion = $('#txtDescripcion').val();


    /*$('#inputFechaReg').addClass('cH');
    $('#inputModPre').addClass('cH');
    $('#inputModPre').addClass('cH');
    $('#inputNoDocMod').addClass('cH');
    $('#inputFecCom').addClass('cH');
    $('#txtDescripcion').addClass('cH');*/


    if(fechaRegistro == '' || fechaRegistro == null || fechaRegistro == undefined){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Fecha Registro vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(modPresu == '' || modPresu == null || modPresu == undefined){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Modificación Presupuestaria vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(DocMod == '' || DocMod == null || DocMod == undefined){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Documento de Modificación vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(noDocMod == '' || noDocMod == null || noDocMod == undefined){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo No. de documento de Modificación vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(FecComp == '' || FecComp == null || FecComp == undefined){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Fecha Comprobante vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(descripcion == '' || descripcion == null || descripcion == undefined){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Descripción vacío',
            showConfirmButton: true,
        });
        return false;
    }

        $('#inputFechaReg').addClass('cH');
        $('#inputModPre').addClass('cH');
        $('#inputDocMod').addClass('cH');
        $('#inputNoDocMod').addClass('cH');
        $('#inputFecCom').addClass('cH');
        $('#txtDescripcion').addClass('cH');

})


    function partPresuDet (id) {

        $.ajax({
            url: './api/v1/PresuPartida.php?numPartida=' + id,
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

                    $('#inputNuevaPartida').val(NumProyecto+ '-' +NumActividad+ '-' +NumObra);
                });
            },
            error: function (data) {
                console.log("No se lograron cargar los datos(mostrar partida)" + data.responseText);
            }
        });
    }


$('#btnAgregarEncabezado').click(function () {

    let montoPresu = $('#inputMonto').val();
    let saldoFlot = $('#inputSalFlo').val();

    let montFloat = parseFloat(montoPresu);
    let saldFloat = parseFloat(saldoFlot);

    console.log("esto es menor " + montFloat);
    console.log("esto es mayor " +saldoFlot);

    if (montFloat <= saldFloat){

        let idPart = $('#inputPartida').val();
        let partCred = $('#sltPartPresu').val();

        if (idPart == partCred){
            Swal.fire({
                icon: 'warning',
                title: 'Verificar Partida Presupuestaria',
                text: 'No se puede realizar modificación en la misma partida presupuestaria',

            });
        }else {
            var operacion = 0;
            operacion = saldoFlot - montFloat;

            let partida = $('#sltPartPresu').val();
            let nuePart = $('#inputNuevaPartida').val();
            let fechaReg = $('#inputFechaReg').val();
            let docMod = $('#inputDocMod').val();
            let noDoct = $('#inputNoDocMod').val();
            let fechaDoct = $('#inputFecCom').val();
            let opFloat = parseFloat(operacion).toFixed(2);

            $('#inputSalFlo').val(opFloat).addClass('cH');

            $('#tblDetaModiPresu').append(' <tr>\n' +
                '   <td>'+fechaReg+'</td>\n' +
                '   <td>'+montoPresu+'</td>\n' +
                '   <td>'+docMod+'</td>\n' +
                '   <td>'+noDoct+'</td>\n' +
                '   <td>'+nuePart+'</td>\n' +
                '   <td>'+fechaDoct+'</td>\n' +
                '   <td>'+partida+'</td>\n' +
                '   </tr>')

            $('#inputMonto').val('');
            $('#sltPartPresu').val('0');
        }
    }else{
        Swal.fire({
            icon: 'warning',
            title: 'Verificar monto asignado',
            text: 'El monto a asignar es mayor al saldo flotante',
        });
    }
})



$('#btnGuarModPres').click(function () {

    let saldFlotante = $('#inputSalFlo').val();

    let saldoFloat = parseFloat(saldFlotante);

    if(saldoFloat == 0){

        let fechaRegistro = $('#inputFechaReg').val();
        let salIncial = $('#inputSalIni').val();
        let modPresupues = $('#inputModPre').val();
        let presVig = $('#inputPresVig').val();
        let docModPre = $('#inputDocMod').val();
        let numDocModPre = $('#inputNoDocMod').val();
        let fechComp = $('#inputFecCom').val();
        let descri = $('#txtDescripcion').val();
        let partPresu = $('#sltPartPresu').val();
        let monto = $('#inputMonto').val();
        let parPresuIni = $('#inputPartida').val();

        let datosDeb = {
            DateRegistro: fechaRegistro,
            NumModPres: modPresupues,
            StrTipoDocument: docModPre,
            StrNoDocument: numDocModPre,
            DateFechaComp: fechComp,
            StrDescripcion: descri,
            NumPartida: parPresuIni,
        }

        let modPresuDeb = $.ajax({
            url: './api/v1/PresuAgrDebito.php',
            type: 'POST',
            data: datosDeb,
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
                estado = response.state.codstate;
            },
            error: function (request, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: ' '+ request.responseText +' - '+ request.state.strstate,
                });
            }
        });

        $.when(modPresuDeb).done(function () {

            var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tblDetaModiPresu tr'), function(tr){
                return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
                    return td.innerHTML;
                });
            });

            console.log(tableInfo)


            for (let j = 0; j<tableInfo.length ; j++){
                console.log("partida: " + tableInfo[j][0]);

                var modPresuCred = {
                    DateRegistro:tableInfo[j][0],
                    NumModPres:tableInfo[j][1],
                    StrTipoDocumento:tableInfo[j][2],
                    StrNoDocumento: tableInfo[j][3],
                    DateFechaCom: tableInfo[j][5],
                    NumPartid: tableInfo[j][6],
                };

                if(tableInfo[j].length != 0 ){
                    $.ajax({
                        url: './api/v1/PresuAgrCredito.php',
                        type: 'POST',
                        data: modPresuCred,
                        beforeSend: function () {
                            //  $("#btnGuardarTraslado").text('GUARDANDO...').prop('disabled', true);
                        },
                        success: function (response) {
                            console.log(response);

                            $.toast({
                                title: 'Informativo',
                                subtitle: '1 segundo',
                                content: response.state.strstate,
                                type: swichSuccessWarning(response.state.codstate),
                                pause_on_hover: true,
                                delay: 5000
                            });
                            // $("#btnGuardarTraslado").text('GUARDAR').attr('disabled', false);
                            //$('#tblbodyCantidadCie10').empty();

                        },
                        error: function (request, status, error) {
                            console.log(request);
                            $.toast({
                                title: 'Ups!',
                                subtitle: '1 segundo',
                                //content: ' ' + request.responseText,
                                content: response.state.strstate,
                                type: swichSuccessWarning(response.state.codstate),
                                type: 'error',
                                pause_on_hover: true,
                                delay: 5000
                            });
                            //$("#btnGuardarTraslado").text('GUARDAR').attr('disabled', false);
                        }
                    });
                }else{
                    console.log("esto si funciona lo vamos a quitar depues");
                }



            }
        });

    }else{
        Swal.fire({
            icon: 'warning',
            title: 'Saldo Flotante',
            text: 'Aún cuenta con saldo flotante',
        });
    }
})



    function operaCantidad() {

        let saldoInic = $('#inputSaldoIni').val();
        let modifiPres = $('#inputModifiPresu').val();

        let modParse = parseFloat(modifiPres);
        let salInicial = parseFloat(saldoInic);

        //console.log(saldoInic);
        //console.log(modParse);

        if (modParse > salInicial){
            Swal.fire({
                icon: 'warning',
                title: 'Favor verificar el monto',
                text: 'Modificación Presupuestaria es mayor que Saldo Inicial',

            })
            $('#inputModifiPresu').val('').removeClass('cH');
            $('#inputPresuVige').val('').removeClass('cH');
        }
        else{
            var operacionSuma = 0;


            operacionSuma = salInicial + modParse;

            console.log(operacionSuma);

            let operaSumaParse = parseFloat(operacionSuma).toFixed(2);

            let operaModParse = parseFloat(modifiPres).toFixed(2);

            $('#inputPresuVige').val(operaSumaParse).addClass('cH');
            $('#inputModifiPresu').val(operaModParse).addClass('cH');
        }

    }

$('#btnGuardCred').click(function () {
    let fechReg = $('#inputFechRegis').val();
    let modifiPresu = $('#inputModifiPresu').val();
    let DocumMod = $('#inputDocuModifi').val();
    let numDocModif = $('#inputNumDocuModifi').val();
    let fechCompro = $('#inputFechCompro').val();
    let descrip = $('#txtDescripcionCred').val();
    let inputPartid = $('#inputNumPartidaCred').val();


    if (fechReg == '' || fechReg == null || fechReg == undefined) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Fecha Registro vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if (modifiPresu == '' || modifiPresu == null || modifiPresu == undefined) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Modificación Presupuestaria vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if (DocumMod == '' || DocumMod == null || DocumMod == undefined) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Documento de Modificación vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if (numDocModif == '' || numDocModif == null || numDocModif == undefined) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo No. de documento de Modificación vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if (fechCompro == '' || fechCompro == null || fechCompro == undefined) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Fecha Comprobante vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if (descrip == '' || descrip == null || descrip == undefined) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campo Descripción vacío',
            showConfirmButton: true,
        });
        return false;
    }

    var modPresuCred = {
        DateRegistro: fechReg,
        NumModPres: modifiPresu,
        StrTipoDocumento: DocumMod,
        StrNoDocumento: numDocModif,
        DateFechaCom: fechCompro,
        NumPartid: inputPartid,
    };


    $.ajax({
        url: './api/v1/PresuAgrCredito.php',
        type: 'POST',
        data: modPresuCred,
        beforeSend: function () {
            //  $("#btnGuardarTraslado").text('GUARDANDO...').prop('disabled', true);
        },
        success: function (response) {
            console.log(response);

            Swal.fire({
                position: 'top-end',
                icon: swichSuccessWarning(response.state.codstate),
                title: titulosMensaje(response.state.codstate),
                text: response.state.strstate,
                showConfirmButton: false,
                timer: 2000
            });
            // $("#btnGuardarTraslado").text('GUARDAR').attr('disabled', false);
            //$('#tblbodyCantidadCie10').empty();

        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                //content: ' ' + request.responseText,
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            //$("#btnGuardarTraslado").text('GUARDAR').attr('disabled', false);
        }
    });

    $('#inputFechRegis').val('');
    $('#inputModifiPresu').val('');
    $('#inputDocuModifi').val('');
    $('#inputNumDocuModifi').val('');
    $('#inputFechCompro').val('');
    $('#txtDescripcionCred').val('');
    $('#inputNumPartidaCred').val('');
})
    
    
    function operacionCantidad() {

        let saldoInicial = $('#inptSaldIni').val();
        let modificacionPres = $('#inptModiPresu').val();

        let modificacionParse = parseFloat(modificacionPres);

        console.log(saldoInicial);
        console.log(modificacionParse);

        if (modificacionParse > saldoInicial){
            Swal.fire({
                icon: 'warning',
                title: 'Favor verificar el monto',
                text: 'Modificación Presupuestaria es mayor que Saldo Inicial',

            })
            $('#inptModiPresu').val('').removeClass('cH');
            $('#inptPresuVigen').val('').removeClass('cH');
        }
        else{
            var sumaOpera = 0;

            sumaOpera = saldoInicial - modificacionPres;

            let sumaParse = parseFloat(sumaOpera).toFixed(2);

            let modParse = parseFloat(modificacionPres).toFixed(2);

            $('#inptPresuVigen').val(sumaParse).addClass('cH');
            $('#inptModiPresu').val(modParse).addClass('cH');
        }
    }


    $('#btnGuardDebi').click(function () {

        let fechaRegistroDeb = $('#inptFechReg').val();
        let modificaPresu =    $('#inptModiPresu').val();
        let tipoDocumento =    $('#inptDoctoModi').val();
        let numDocumento =     $('#inptNumDoctoModifi').val();
        let fechaComprobante = $('#inptFechCompro').val();
        let descripcionDeb =   $('#txtDescripDeb').val();
        let partidaDebito =    $('#inputNumPartidaDeb').val();


        let datosDebito = {
            DateRegistro: fechaRegistroDeb,
            NumModPres: modificaPresu,
            StrTipoDocument: tipoDocumento,
            StrNoDocument: numDocumento,
            DateFechaComp: fechaComprobante,
            StrDescripcion: descripcionDeb,
            NumPartida: partidaDebito,
        }

        $.ajax({
            url: './api/v1/PresuAgrDebito.php',
            type: 'POST',
            data: datosDebito,
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
                    text: ' ' + request.responseText + ' - ' + request.state.strstate,
                });
            }
        })

        $('#inptFechReg').val('');
        $('#inptModiPresu').val('');
        $('#inptDoctoModi').val('');
        $('#inptNumDoctoModifi').val('');
        $('#inptFechCompro').val('');
        $('#txtDescripDeb').val('');
        $('#inputNumPartidaDeb').val('');
    })






