$(document).ready(function (){
    selPrograma();
});

$('#btnAgrProg').click(function () {
    let programa = $('#inputPrograma').val();
    let nomProg= $('#inputNomPrograma').val();


    let datosProg = {
        NumPrograma: programa,
        StrNomPrograma: nomProg,
    }

    let datPrograma = $.ajax({
        url: './api/v1/PresuPrograma.php',
        type: 'POST',
        data: datosProg,
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
    $.when(datPrograma).done(function () {

            $('#tblBodyPrograma').append(' <tr>\n' +
                '               <td>'+programa+'</td>\n' +
                '               <td>'+nomProg+'</td>\n' +
                '   </tr>')

            $('#inputPrograma').val('');
            $('#inputNomPrograma').val('');


    });
})

var estado;

$('#btnAgrSubProg').click(function () {
    let programa = $('#sltProg').val();
    let subPro= $('#inputSubPrograma').val();
    let nomSubPro = $('#inputNomSubPrograma').val();
    let estadoProg = 0;

    let datosSubProg = {
        NumSubPrograma: subPro,
        StrNomSubPrograma: nomSubPro,
        NumPrograma: programa,
    }

    console.log(datosSubProg);

    let datSubPrograma = $.ajax({
        url: './api/v1/PresuSubPrograma.php',
        type: 'POST',
        data: datosSubProg,
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
            estadoProg = 0;
        }
    });

    console.log(estado);
    $.when(datSubPrograma).done(function () {
        console.log(estado);

        if (estado == 1){
        $('#tblBodySubPrograma').append(' <tr>\n' +
    '               <td>'+subPro+'</td>\n' +
    '               <td>'+nomSubPro+'</td>\n' +
    '   </tr>')

        $('#inputSubPrograma').val('');
        $('#inputNomSubPrograma').val('');
        }
        else{
            console.log('no se pudo')
        }
    });
})

$('#btnAgrSubProd').click(function () {
    let subProducto = $('#inputSubProducto').val();
    let nomSubProducto = $('#inputNomSubProducto').val();
    let producto = null

    let datosSubProducto = {
        NumSubProducto: subProducto,
        StrSubProducto: nomSubProducto,
        NumProducto: producto,
    }

    let datSubProducto = $.ajax({
        url: './api/v1/PresuSubProducto.php',
        type: 'POST',
        data: datosSubProducto,
        beforeSend: function () {
        },
        success: function (response) {
            console.log(response.responseText);
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '¡CORRECTO!',
                showConfirmButton: false,
                timer: 1500
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
    $.when(datSubProducto).done(function () {
        $('#tblBodySubProducto').append(' <tr>\n' +
    '               <td>'+subProducto+'</td>\n' +
    '               <td>'+nomSubProducto+'</td>\n' +
    '   </tr>')

       $('#inputSubProducto').val('');
       $('#inputNomSubProducto').val('');
    });
})