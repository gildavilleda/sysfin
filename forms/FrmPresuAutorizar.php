<!-- Contenido-->
<div id="vcontent" class="container2 margenCard">
    <div id="cardAutSol" class="card">
        <div class="modal-header text-center white-text gradientP">
            <h3 class="modal-title w-100 font-weight-bold">Autorizar Solicitudes</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#cardAutSol').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <div class="col-sm-12" id="contAutSolPre" name="contAutPresupuesto">

                <table class="table" id="tblSolPresu">
                    <thead class="table-primary text-center">
                    <tr>
                        <th scope="col">No. de SP</th>
                        <th scope="col">Nombre del solicitante</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Adjunto</th>
                        <th scope="col">Seguimiento</th>
                        <th scope="col">Autorizar</th>
                        <th scope="col">Rechazar</th>
                        <th scope="col">Cambiar Dep.</th>
                    </tr>
                    </thead>
                    <tbody id="tbodySolPresu">

                    </tbody>
                </table>
             </div>
        </div>
     </div>
    </div>
</div>


     <!-- ModalSeg -->
    <div class="modal" id="modalSeguimiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center white-text gradientP">
                    <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Agregar Seguimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalSeguimiento').fadeOut();">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="formulario-envia" id="formularioEnv" enctype="multipart/form-data" method="POST">
                        <div class="row" hidden>
                            <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputRegistro">No.</label>
                                </div>
                                <input type="text" class="form-control" id="NumSolicitudSeg" name="NumSolicitudSeg">
                            </div>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            El apartado de adjuntar archivos es opcional, se permiten adjuntar: <b>imagenes, PDF's, xls, xlsx, csv</b>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputCUI" style="width: 150px; text-align: center">Adjuntar Archivo</label>
                                </div>
                                <input class="form-control" type="file" id="AdjuntoSeg" name="adjuntoDictamen">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputCUI" style="width: 150px; text-align: center">Seguimiento</label>
                                </div>
                                <textarea class="form-control" rows="4" id="textSegumiento" name="textSegumiento">

                            </textarea>
                            </div>
                        </div>

                    </form>
                    <div class="modal-footer">
                        <div class="col col-md-6">
                            <button class="btn btn-success btn-block" id="btnEnviarSeg">Enviar Seguimiento</button>
                        </div>
                        <div class="col col-md-6">
                            <button class="btn btn-warning btn-block" id="btnVerSeg">Ver Seguimientos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin ModalSeg-->

    <!-- ModalAutorización -->

    <div class="modal" id="modalPartPresu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-center white-text gradientP">
                    <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Agregar Partida</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalPartPresu').fadeOut();">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="numSolPedido" name="numSolPedido">
                    <form name="formularioPartPresu" id="formPart" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" >Partida Presupuestaria</label>
                                    </div>
                                    <select class="custom-select" id="sltParPres" name="sltParPres" onchange="traerPartida(this.value)">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" >Fecha</label>
                                    </div>
                                    <input class="form-control" type="date" id="datAgPartida" name="datAgPartida">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Programa</label>
                                    </div>
                                    <select class="custom-select" id="sltProg" name="sltProg">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputSubProg">Subprograma</label>
                                    </div>
                                    <select class="custom-select" id="sltSubPro" name="sltSubPro">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Proyecto</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputProy" name="proyectoPart">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Actividad</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputAct" name="actividadPart">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Obra</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputObr" name="obraPart">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Renglón</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputReng" name="renglonPart">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ubicación geográfica</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputUbiGeo" name="ubiGeoPart">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Fuente financiamiento</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputFueFin" name="fueFinPart">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Subproducto</label>
                                    </div>
                                    <select class="custom-select" id="sltSubProducto" name="sltSubProducto">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">DISPONIBLE</span>
                                    </div>
                                    <input type="text" class="form-control cH" id="inputDisponible" name="inputDisponible">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Total</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputTotal" name="totalPart">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Descripción</label>
                                    </div>
                                    <textarea class="form-control" id="inputDescripcion" name="inputDescripcion" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <button class="btn btn-info btn-md" id="btnAgregar" name="botonAgregar" style="margin-left: 1015px" onclick="agrFila();">Agregar<i class="fas fa-folder-plus" style="margin-left: 3px"></i></button>
                    </div>
                    <table class="col-lg mb-3" style="margin-top: 20px">
                        <thead class="gradientP text-center table-striped white-text">
                            <tr style="height: 40px;">
                                <th hidden>NumPartida</th>
                                <th>FECHA</th>
                                <th>PROG.</th>
                                <th>SUBP.</th>
                                <th>PROY.</th>
                                <th>ACT.</th>
                                <th>OBRA</th>
                                <th>RENGLÓN</th>
                                <th>UB. GEO</th>
                                <th>FTE. FIN</th>
                                <th>TOTAL</th>
                                <th>SUBPRODUCTO</th>
                                <th>DESCRIPCION</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyTablaAut">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <button class="btn btn-info btn-md" id="btnAutPar" name="botonAgrPart">Agregar partida</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin ModalSeg-->

<!-- Modal Ver Seguimientos-->
<div class="modal" id="modalVerSeguimientos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text gradientP">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Seguimientos...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalVerSeguimientos').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <input type="hidden" class="form-control" id="inputNoSolicitudVerS">

                </div>
                <div id="contSeguimientos" class="col-sm-10 offset-sm-1">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal seguimiento-->

<script type="text/javascript" src="./js/js_PresuPresuAutorizar.js"></script>
<script type="text/javascript" src="./js/js_FnGenerales.js"></script>
