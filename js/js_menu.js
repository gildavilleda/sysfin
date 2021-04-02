function fnOpenForm(evt, formname) {
    var Count = 0;
    $("#content").hide();


    var permisos = $.getJSON("./api/v1/Permisos.php?SegStrNomPermiso=" + formname, function (data) {
        Count = data.data.length;

    });

    $.when(permisos).done(function () {
        console.log(Count);
        $("#content").empty();
        if (Count > 0) {
            $("#content").load('./forms/' + formname + '.php');
        } else {
            $("#content").load('./forms/FrmDenegado.php');
        }
        $("#content").show();
    }).fail(function () {
        if (permisos.status === 403) {
            location.reload();
        }
    });
}

$(document).ready(function (){
    $.ajax({
        url: './api/v1/DatosUsuario.php?validarPA=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            //console.log("-------------------");
            //console.log(json)
            //console.log("-------------------");
            $(json).each(function (index, item) {
                SegNumUsuario= json[index].SegNumUsuario;
                SegStrUsuario= json[index].SegStrUsuario;
                SegStrPuesto= json[index].SegStrPuesto;
                SegStrcorreoElec= json[index].SegStrcorreoElec;
                SegStrNomUsuario= json[index].SegStrNomUsuario;
                SegNumRol= json[index].SegNumRol;
                SegCharAutCirugia= json[index].SegCharAutCirugia;
                SegStrArea= json[index].SegStrArea;
                NumDepartamento= json[index].NumDepartamento;
                NumTelefono= json[index].NumTelefono;

                if(SegStrPuesto == null ||SegStrPuesto == undefined || SegStrPuesto == '' || SegStrArea == null ||SegStrArea == undefined || SegStrArea == '' || NumTelefono == null ||NumTelefono == undefined || NumTelefono == ''){
                    $('#modalIndex').fadeIn();

                    $('#inputPuesto').val(SegStrPuesto);
                    $('#inputDepartamento').val(SegStrArea);
                    $('#inputTelefono').val(NumTelefono);
                    $('#inputNumUsuario').val(SegNumUsuario);
                    //console.log('ola que hace')

                }

                //$('#sltSubProducto').append('<option value="'+NumSubProducto+'">('+NumSubProducto+') '+StrSubProducto+'</option>')
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(Detalle Usuario)" + data.responseText);
        }
    });
});

$('#btnGuaDat').click(function () {
    let puesto = $('#inputPuesto').val();
    let depto = $('#inputDepartamento').val();
    let tel = $('#inputTelefono').val();
    let usuario = $('#inputNumUsuario').val();


    var actualizarPuesto = $.ajax({
        url: './api/v1/DatosUsuario.php?PuestoUsuario=true&SegNumUsuario=' + usuario + '&SegStrPuesto=' + puesto,
        type: 'PUT',
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
    });

    var actualizarDepto = $.ajax({
        url: './api/v1/DatosUsuario.php?AreaUsuario=true&SegNumUsuario=' + usuario + '&SegStrArea=' + depto,
        type: 'PUT',
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
    });
    
})


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