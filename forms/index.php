<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>HNEVN - APM</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="css/index.css">



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

<!-- Material Design Bootstrap -->
<link href="./css/mdb.min.css" rel="stylesheet">

<!-- Date Range Picker-->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
        defer></script>

<!-- Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js" defer></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

<!-- Context menu -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"
        defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js" defer></script>

<!--     Css     -->
<link rel="stylesheet" href="./css/index.css" type="text/css" media="all">
<link rel="stylesheet" href="./css/Style.css" type="text/css" media="all">

<!-- lebreria toas -->
<link rel="stylesheet" href="./css/toast.min.css ">
<script src="./js/toast.min.js" type="text/javascript" defer></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<style>
    body {
        font-family: "Roboto", "Helvetica", "Arial", "Sans-serif";
    }
</style>
</head>

<body>

<header id="header">
    <!--menu-->
    <nav class="navbar-expand-lg navbar fixed-top navbar-dark bg-dark" style="font-family: 'Helvetica'; font-weight: bold; color: white; font-size: 20px;">
        <a class="navbar-brand" href="index.php" style="font-family: 'Helvetica'; font-weight: bold; color: white; font-size: 22px"><img src="./img/logo.png" style="margin-right: 15px" alt="LogoHospital">SISFIN</a>
        <button class="navbar-toggler form-inline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-pills nav-fill" id="navbarSupportedContent" style="margin-left: 30px; font-size: medium">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users" style="margin-right: 5px;"></i>Usuario</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmCrearSolicitud')"><i class="fas fa-tasks" style="margin-right: 10px"></i>Crear Solicitud de pedido</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmProcesoUsuario')"><i class="fas fa-project-diagram" style="margin-right: 10px"></i>Solicitudes en proceso</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmFinalizadasUsuario')"><i class="fas fa-vote-yea" style="margin-right: 10px"></i>Solicitudes finalizadas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmRechazadasUsuario')"><i class="fas fa-times" style="margin-right: 10px"></i>Solicitudes rechazadas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart" style="margin-right: 5px"></i>Compras</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmSolicituRecibida')"><i class="fas fa-file-import" style="margin-right: 10px"></i>Solicitudes recibidas</a>
                        <div class="dropdown-divider"></div>
                        <!--<a class="dropdown-item" onclick="fnOpenForm(event, 'FrmRevisionSolicitud')">Revision Solicitudes</a>
                        <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmAutorizaSolicitud')"><i class="fas fa-check-circle" style="margin-right: 10px"></i>Autorizacion de solicitud</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmProcesoCompra')"><i class="fas fa-retweet" style="margin-right: 10px"></i>Proceso de compras</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmSolicitudesTrabajadas')"><i class="fas fa-network-wired" style="margin-right: 10px"></i>Solicitudes Trabajadas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-hand-holding-usd" style="margin-right: 10px"></i>Presupuesto</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmPresuSolicitudRecibida')"><i class="fab fa-get-pocket" style="margin-right: 10px"></i>Solicitudes Recibidas</a>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmPresuAutorizar')"><i class="fas fa-check-double" style="margin-right: 10px"></i>Autorizar Solicitud</a>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmPresuSolGerencia')"><i class="fas fa-tasks" style="margin-right: 10px"></i>Gestiones Gerencia</a>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmPresuSolDireccion')"><i class="fas fa-user-check" style="margin-right: 10px"></i>Gestiones Dirección Ejecutiva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmPresuAgregarDatosPartida')"><i class="fas fa-file-invoice-dollar" style="margin-right: 10px"></i>Datos partida</a>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmPresupuesto')"><i class="fas fa-chart-bar" style="margin-right: 10px"></i>Presupuesto</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tools" style="margin-right: 5px"></i>Utilidades</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmBasesCompra')"><i class="fas fa-clipboard-list" style="margin-right: 10px"></i>Bases</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmReAsignaSolicitud')"><i class="fas fa-exchange-alt" style="margin-right: 10px"></i>Reasignar Solicitud</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmAgregarPac')"><i class="fas fa-vote-yea" style="margin-right: 10px"></i></i>Agregar PAC</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'FrmAutoridades')"><i class="fas fa-street-view" style="margin-right: 10px"></i>Autoridades</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'UtlFrmCerrar')"><i class="fas fa-door-open" style="margin-right: 10px"></i>Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div id="content">
</div>


<div id="modComInf">
    <div class="modal" tabindex="-1" role="dialog" id="modalIndex">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
            <div class="modal-content" >
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalIndex').fadeOut();">
                        <span aria-hidden="true" style="margin-right: 10px; margin-top: 10px">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="w-100 font-weight-bold col-sm-auto text-center">Hemos detectado que falta información en tu usuario. </h5>
                    <h4 class="w-100 font-weight-bold col-sm-auto text-center text-warning">Ayudanos a completarlo!</h4>
                        <div class="col-sm-auto text-center">
                            <img src="./img/warning.jpg" class="card-img-64" alt="" id="imgWarning">
                        </div>

                        <input class="form-control" id="inputNumUsuario">
                        <div class="col-sm-auto">
                            <div class="col-sm-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" >Puesto</label>
                                    </div>
                                    <input class="form-control" type="text" id="inputPuesto" name="inputPuesto">
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" >Departamento</label>
                                    </div>
                                    <input class="form-control" type="text" id="inputDepartamento" name="inputDepartamento">
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" >Teléfono</label>
                                    </div>
                                    <input class="form-control" type="text" id="inputTelefono" name="inputTelefono">
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" id="btnGuaDat">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
<!--<a href='https://www.freepik.es/vectores/personas'>Vector de Personas creado por pch.vector - www.freepik.es</a>-->
</div>

<div id="contModTel">

</div>

<script src="./js/js_menu.js" type="text/javascript"></script>
</body>

</html>
