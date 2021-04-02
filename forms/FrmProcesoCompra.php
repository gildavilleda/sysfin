<!-- Loading
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success m-10" role="status" style="width: 15rem; height: 15rem;">
        <span class="sr-only">Loading...</span>
    </div>
  </div>-->

  <!-- Contenido-->
  <div id="vcontent" class="container margenCard">
    <div id="InsumoEnt" class="card">
      <div class="modal-header text-center white-text gradientP">
        <h3 class="modal-title w-100 font-weight-bold">Proceso Compras</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
        onclick="$('#InsumoEnt').fadeOut();">
        <span aria-hidden="true" class="text-white">&times;</span>
      </button>
    </div>
        <div class="card-body">
            <br>
            <div class="col-sm-10 offset-sm-1" id="contenedorSR">

            </div>
        </div>
    </div>
  </div>



<!-- ModalSeg -->
<div class="modal" id="modalFinalizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text gradientP">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Finalizar proceso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalFinalizar').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="inputSolicitudId" name="inputSolicitudId">
                <div class="alert alert-warning" role="alert">
                    Insumos disponibles en esta solicitud
                </div>
                <div id="contenedorInsumos">
                   <table id="tablaInsumosFin" class="table">
                       <thead>
                           <th>Codigo Insumo</th>
                           <th>Descripcion</th>
                           <th>Estado</th>
                       </thead>
                       <tbody id="tbodyInsumoFinal">

                       </tbody>


                </table>


                </div>
                <button class="form-control btn-success btn-block" onclick="abrirModal($('#inputSolicitudId').val(), 'bntSeguimiento')">Agregar Seguimiento</button>
                <div class="col col-sm-10" style="place-content: center">
                    <button class="btn btn-warning btn-md" id="btnValidarFinal" >Validar Finalizacion</button>
                    <button class="btn btn-danger btn-md" id="btnFinalizarSeg">Finalizar Solicitud</button>
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

<!-- Modal Ver proveedores-->
<div class="modal" id="modalProveedores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow: auto">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text gradientP">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Datos Proveedor...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalProveedores').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="DatosProveedor" ">
                <input type="hidden" id="codInsumoFinal" name="codInsumoFinal">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputEstados" style="width: 150px; text-align: center">Estado Final</label>
                    </div>
                    <select class="custom-select" id="SelFinalizado" onchange="selEstadoCambio(this.value)">
                        <option selected>Seleccionar opción</option>

                    </select>
                </div>
                <div class="form-row">
                    <div class="col col-sm-6">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="FechaCompraOr">Fecha Orden de compra</label>
                            </div>
                            <input class="form-control col" type='date'  name="DatFechaCompra" id="DatFechaCompra">
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Numero">Número de O.C</label>
                            </div>
                            <input class="form-control col " type='text' name="TextNumeroOC" id="TextNumeroOC">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Entrega">Fecha Entrega de orden compra Proveedor</label>
                            </div>
                            <input class="form-control col " type='date' name="DatFechaEntregaOr" id="DatFechaEntregaOr">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Entrega">Nombre del Proveedor</label>
                            </div>
                            <input class="form-control col " type='text' name="textNombreProv" id="textNombreProv">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Entrega">Nit del Proveedor</label>
                            </div>
                            <input class="form-control col " type='text' name="textNitProv" id="textNitProv">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="PlazoEntre">Plazo de entrega</label>
                            </div>
                            <input class="form-control col " type='text' name="DatPlazoEntrega"  id="DatPlazoEntrega">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="RecepcionEx">Fecha recepción de expediente almacén</label>
                            </div>
                            <input class="form-control col " type='date' name="DatRecepcion" id="DatRecepcion">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Factura">Fecha de factura</label>
                            </div>
                            <input class="form-control col " type='date' name="DatFactura" id="DatFactura">
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col col-sm-6">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Serie">Serie Factura</label>
                            </div>
                            <input class="form-control col " type='text' name="TextSerieFactura" id="TextSerieFactura">
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Serie">Factura No.</label>
                            </div>
                            <input class="form-control col " type='text' name="TextNoFactura" id="TextNoFactura">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="<NumeroFec">Número de 1H o fecha de carta de Satisfacción</label>
                            </div>
                            <input class="form-control col " type='text' name="TextNumeroFecha" id="TextNumeroFecha">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="NumeroPubli">Número de publicación GUATECOMPRAS (NPG / NOG)</label>
                            </div>
                            <input class="form-control col " type='text' name="TextNumeroPublicacion" id="TextNumeroPublicacion">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-sm-12">
                        <div class="input-group input-group-sm mb-sm-3 col-sm-auto">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="NumeroPubli">Monto Adjudicado</label>
                            </div>
                            <input class="form-control col " type="number" name="NumMontoAd" id="NumMontoAd">
                        </div>
                    </div>
                </div>
                </form>
                <div class="col col-sm-12">
                    <button class="btn btn-success btn-block" id="btnGuardarProv">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal proveedores-->
<!-- Fin Modal seguimeinto-->

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
                            <input class="form-control" type="file" id="adjuntoDictamen" name="adjuntoDictamen">
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
                <div class="col col-sm-10" style="place-content: center">
                    <button class="btn btn-success btn-md" id="btnEnviarSeg" >Enviar Seguimiento</button>
                    <button class="btn btn-danger btn-md" id="btnRechazarSeg" >Rechazar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin ModalSeg-->





    <script type="text/javascript" src="./js/js_ProcesoCompra.js"></script>
