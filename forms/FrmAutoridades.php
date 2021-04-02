<div class="container-fluid">
    <div id="modalCrearSolicitud" class="card margenCard">
        <div class="modal-header text-center text-white gradientP">
            <h3 class="modal-title w-100 font-weight-bold">AGREGAR PAC</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#modalCrearSolicitud').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
        </div>

        <div class="modal-body">



            <form name="formulario-envia" id="formularioEnv" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputImagen">Director(a)</label>
                        </div>
                        <input type="text" class="form-control cH" id="directorActual" name="directorActual">
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputImagen">Gerente Financiero</label>
                        </div>
                        <input type="text" class="form-control cH" id="gFinancieroActual" name="gFinancieroActual">
                    </div>
                </div>
            </form>
            <br>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#NuevasAutoridades" aria-expanded="false" aria-controls="collapseThree">
                                AGREGAR
                            </button>
                        </h2>
                    </div>
                    <div id="NuevasAutoridades" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputImagen">Nuevo Director(a)</label>
                                    </div>
                                    <input type="text" class="form-control" id="directorAg" name="directorAg">
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-success btn-block" id="agDirector">AGREGAR DIRECTOR(A)</button>
                            <br>
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputImagen">Nuevo Gerente Financiero</label>
                                    </div>
                                    <input type="text" class="form-control" id="gFinancieroAg" name="gFinancieroAg">
                                </div>
                            </div>

                            <button class="btn btn-success btn-block" id="agGerente">AGREGAR GERENTE</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ACTUALIZAR
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputImagen">Director(a)</label>
                                    </div>
                                    <select class="form-control" id="selDirector">

                                    </select>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-warning btn-block" id="acDirector">ACTUALIZAR DIRECTOR(A)</button>
                            <br>
                            <div class="row">
                                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputImagen">Gerente Financiero</label>
                                    </div>
                                    <select class="form-control" id="selGerente">

                                    </select>
                                </div>
                            </div>

                            <button class="btn btn-warning btn-block" id="acGerente">ACTUALIZAR GERENTE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--
                <div class="row">
                    <div class="col col-sm-6">
                        <button class="btn btn-success btn-block">Formato Solicitud de Pedido <i class="fas fa-download"></i></button>
                    </div>
                    <div class="col col-sm-6">
                        <button class="btn btn-success btn-block">Ficha tecnica <i class="fas fa-download"></i></button>
                    </div>
                </div>
            -->

        </div>
    </div>




    <script type="text/javascript" src="./js/js_Autoridades.js"></script>