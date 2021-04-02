$(document).ready(function () {
    mostrarAutoridades();
});

function mostrarAutoridades(){
    $.ajax({
        url: './api/v1/Autoridades.php?mostAutoridades=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                NomAutoridad = json[index].NomAutoridad;
                StrNombre = json[index].StrNombre;
                StrCargo = json[index].StrCargo;
                CharEstado = json[index].CharEstado;

                if(StrCargo == 'Director'){
                    $('#directorActual').val(StrNombre);
                }else if(StrCargo == 'GerenteF'){
                    $('#gFinancieroActual').val(StrNombre);
                }

            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

$('#agDirector').click(function () {
    let directorAg = $('#directorAg').val();

    let datos = {StrNombre: directorAg,
                 StrCargo: 'Director'}

    $.ajax({
        url: './api/v1/Autoridades.php',
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
        }
    });
});

$('#agGerente').click(function () {
    let gFinancieroAg =$('#gFinancieroAg').val();

    let datos = {StrNombre: gFinancieroAg,
        StrCargo: 'GerenteF'}

    $.ajax({
        url: './api/v1/Autoridades.php',
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
        }
    });
});

$('#acDirector').click(function () {
    let selDirector = $('#selDirector').val();
});

$('#acGerente').click(function () {
    let selGerente =$('#selGerente').val();
});