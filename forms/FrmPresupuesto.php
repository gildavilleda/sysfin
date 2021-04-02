<!-- Contenido-->
<div id="vcontent" class="container3 margenCard">
    <div id="cardPresupuesto" class="card">
        <div class="modal-header text-center white-text gradientP">
            <button type="button" class="btn  btn-circle float-left btn orange darken-4" onclick="abrModNuePart()">
                <i class="material-icons">addchart</i>
            </button>
            <h3 class="modal-title w-100 font-weight-bold">Presupuesto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#cardPresupuesto').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body" style="overflow-y: scroll;">
            <div class="row">
                <div class="col-sm">
                    <form class="form-inline right">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" id="inputBuscar" name="inputBuscar">
                        <button class="btn btn-info my-2 my-sm-0" type="submit" id="btnBuscar" name="botonBuscar">Buscar</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        2020
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table" id="tblPresu">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">NumPartida</th>
                                                <th scope="col">PG</th>
                                                <th scope="col">SPG</th>
                                                <th scope="col">PY</th>
                                                <th scope="col">ACT</th>
                                                <th scope="col">OB</th>
                                                <th scope="col">SUB-PROD</th>
                                                <th scope="col">REN</th>
                                                <th scope="col">UG</th>
                                                <th scope="col">FTE</th>
                                                <th scope="col">ORG</th>
                                                <th scope="col">CORR</th>
                                                <th scope="col" width="60px">ASIGNADO</th>
                                                <th scope="col" width="60px" hidden>DEBITOS</th>
                                                <th scope="col" width="60px" hidden>CREDITOS</th>
                                                <th scope="col" width="60px" hidden>VIGENTE</th>
                                                <th scope="col" width="60px" hidden>SOLICITUDES DE PEDIDO PRE COMPROMISO</th>
                                                <th scope="col" width="60px" hidden>COMPROMETIDO</th>
                                                <th scope="col" width="60px" hidden>DEVENGADO</th>
                                                <th scope="col" width="60px" hidden>PAGADO</th>
                                                <th scope="col" width="60px" hidden>SALDO PRE COMPROMISO</th>
                                                <th scope="col" width="60px" hidden>SALDO DISPONIBLE</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyPresu">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Contenido-->
<div id="contenidoTarje" class="container3 modal" style="margin-top: 10px; overflow-y: scroll;" >
    <div id="cardPresuTarjeta" class="card">
        <div class="modal-header text-center white-text gradientP">
            <h3 class="modal-title w-100 font-weight-bold">Tarjeta de Presupuesto</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#contenidoTarje').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-sm text-center">
                    <h4>Ejercicio Fiscal 2020</h4>
                </div>
            </div>
            <div class="row">
                <input type="hidden" id="inputNumPartida" name="inputNumPartida">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Programa/Subprograma</span>
                            </div>
                            <input type="text" class="form-control" id="inputProg-SubPro" name="inputProg-SubPro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Proyecto/Actividad/Obra</span>
                            </div>
                            <input type="text" class="form-control" id="inputProy-Act-Obra" name="inputProy-Act-Obra">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Renglón</span>
                            </div>
                            <input type="text" class="form-control" id="inputRenglón" name="inputRenglón">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Ubicación Geográfica</span>
                            </div>
                            <input type="text" class="form-control" id="inputUbcGeo" name="inputUbcGeo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Fuente de Financiamiento</span>
                            </div>
                            <input type="text" class="form-control" id="inputFueFin" name="inputFueFin">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm mb-sm-3 col-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Subproducto</span>
                            </div>
                            <input type="text" class="form-control" id="inputSubProducto" name="inputSubProducto">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                   <div class="card">
                       <div class="card-body">
                           <table class="table" id="tblPresuMod">
                               <thead class="thead-dark">
                               <tr>
                                   <th width="45">Fecha de Registro</th>
                                   <th width="70">Saldo Inicial</th>
                                   <th width="70">Modificación Presupuestaria</th>
                                   <th width="70">Presupuesto Vigente</th>
                                   <th width="55">Comprobante de Modificación No.</th>
                                   <th width="45">Fecha del Comprobante
                                   </th>
                               </tr>
                               </thead>
                               <tbody id="tBodyPresuMod">

                               </tbody>
                               <tfoot>
                               <tr>
                                   <td>Total</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               </tfoot>
                           </table>
                       </div>
                       <div class="card-footer">
                           <button class="btn btn-info btn-md" id="btnAgregar" name="botonAgregar" style="text-align: right" onclick="mostDet()"><i class="fas fa-plus" style="margin-right: 10px"></i>Agregar</button>
                       </div>
                   </div>
                </div>
            </div>

            <div class="row margen">
               <div class="col-sm">

               </div>
            </div>
            <table class="table" id="tblDetTarjeta">
                <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">T. Documento</th>
                    <th scope="col">No. Documento</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Apertura Modificación Presupuestaria (A)</th>
                    <th scope="col">SOLICITUDES DE PEDIDO</th>
                    <th scope="col">COMPROMETIDO (B)</th>
                    <th scope="col">DEVENGADO  (C)</th>
                    <th scope="col">PAGADO  (D)</th>
                    <th scope="col">COMPROMETER (E)</th>
                    <th scope="col">DEVENGAR  (F)</th>
                    <th scope="col">PAGAR  (G)</th>
                </tr>
                </thead>
                <tbody id="tbodyDetTarjeta">

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <button class="btn btn-info btn-md" id="btnNueAgrDet" name="botonAgrDet"><i class="fas fa-plus" style="margin-right: 10px"></i>Agregar</button>
        </div>
    </div>
</div>



<!-- Modal Agregar Detalle -->
<div class="modal" id="modDetTar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text gradientP">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Agregar Detalle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modDetTar').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formDetTar" id="formDetTar" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <input type="text" class="form-control" id="inputTarjeta">
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Fecha de registro</label>
                                </div>
                                <input type="date" class="form-control" id="inputFecReg" name="inputFecReg">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Tipo de documento</label>
                                </div>

                                <select class="form-control" id="inputTipDoc" name="inputTipDoc" onchange="selTipoDocu(this.value);">
                                    <option value="0">Seleccione...</option>
                                    <option value="OC">Orden de compra</option>
                                    <option value="FACT">Factura</option>
                                    <option value="SOL.CH">Caja chica</option>
                                    <option value="LIQ">Liquidación</option>
                                    <option value="CYD">Compromiso y Devengado</option>
                                    <option value="REV">Reversión</option>
                                    <option value="PROG">Programación</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">No. de Documento</span>
                                </div>
                                <input type="text" class="form-control" id="inputNoDoc" name="inputNoDoc">
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
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="input-group mb-3" id="colSolPeido" hidden>
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Solicitudes de pedido</label>
                                </div>
                                <input type="number" class="form-control" id="inputSolPed" name="inputSolPed" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="tituloRegistroDel">
                        <h5 class="marIzq w-100 font-weight-bold">Registro del</h5>
                    </div>
                    <div class="row" id="registrosDel" >
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Comprometido (B)</label>
                                </div>
                                <input type="number" class="form-control" id="inputComReg" name="inputComReg" value="0.00">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Devengado (C)</label>
                                </div>
                                <input type="number" class="form-control" id="inputDevReg" name="inputDevReg" value="0.00">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pagado (D)</span>
                                </div>
                                <input type="number" class="form-control" id="inputPagReg" name="inputPagReg" value="0.00">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="tituloSaldoPor" >
                        <h5 class="marIzq w-100 font-weight-bold">Saldo por</h5>
                    </div>
                    <div class="row" id="soldaPor">
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Comprometer (E)</label>
                                </div>
                                <input type="number" class="form-control cH" id="inputComSal" name="inputComSal" value="0.00">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Devengar (F)</label>
                                </div>
                                <input type="number" class="form-control cH" id="inputDevSal" name="inputDevSal" value="0.00">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pagar (G)</span>
                                </div>
                                <input type="number" class="form-control cH" id="inputPagSal" name="inputPagSal" value="0.00">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <button class="btn btn-info btn-md" id="btnAgrDet" name="btnAgrDet">Agregar detalle</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Agregar Detalle-->


<!-- Modal Nueva Partida -->
<div class="modal" id="modNuePart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text gradientP">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Agregar Partida Presupuestaria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modNuePart').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <form name="formNuePart" id="formNuePart" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Programa</label>
                                </div>
                                <select class="custom-select" id="sltProg" name="sltProg">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">SubPrograma</label>
                                </div>
                                <select class="custom-select" id="sltSubPro" name="sltSubPro">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Proyecto</label>
                                </div>
                                <input type="text" class="form-control" id="inputPro" name="inputPro">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Actividad</span>
                                </div>
                                <input type="text" class="form-control" id="inputAct" name="inputAct">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Obra</label>
                                </div>
                                <input type="text" class="form-control" id="inputObrPart" name="inputObrPart">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">SubProducto</label>
                                </div>
                                <select class="custom-select" id="sltSubProducto" name="sltSubProducto">

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Renglón</span>
                                </div>
                                <input type="text" class="form-control" id="inputRenglon" name="inputRenglon">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Ubicación Geográfica</label>
                                </div>
                                <input type="text" class="form-control" id="inputUbiGeo" name="inputUbiGeo">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Fuente Financiamiento</span>
                                </div>
                                <input type="text" class="form-control" id="inputFteFin" name="inputFteFin">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Organización</span>
                                </div>
                                <input type="text" class="form-control" id="inputOrg" name="inputOrg">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Correlativo</span>
                                </div>
                                <input type="text" class="form-control" id="inputCorre" name="inputCorre">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Asignado</label>
                                </div>
                                <input type="text" class="form-control" id="inputAsignado" name="inputAsignado">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <button class="btn btn-info btn-md" id="btnAgrPar" name="btnAgrPar">Agregar partida</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Nueva Partida-->


<!-- Modal Nueva Modificacion-->
<div class="modal" id="modPresMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" overflow-y: scroll;">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text gradientP">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Resumen de movimientos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modPresMod').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active text-warning" id="tabReor" data-toggle="tab" href="#contReord" role="tab" aria-controls="contReord" aria-selected="true">Reordenamiento</a>
                                    <a class="nav-item nav-link text-warning" id="tabCred" data-toggle="tab" href="#contCred" role="tab" aria-controls="contCred" aria-selected="false">Crédito</a>
                                    <a class="nav-item nav-link text-warning" id="tabDeb" data-toggle="tab" href="#contDeb" role="tab" aria-controls="contDeb" aria-selected="false">Débito</a>
                                </div>
                            </nav>
                            <div class="tab-content margen" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="contReord" role="tabpanel" aria-labelledby="tabReor">
                                    <input type="text" class="form-control" id="inputPartida">
                                    <div class="row">
                                        <div class="col-sm">
                                            <h4 class="text-warning text-center">Datos débito</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Fecha de registro</span>
                                                </div>
                                                <input type="date" class="form-control" id="inputFechaReg" name="inputFechaReg">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Saldo Inicial</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputSalIni" name="inputSalIni">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Modificación presupuestaria</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputModPre" name="inputModPre" onchange="opeCant();">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Presupuesto Vigente</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputPresVig" name="inputPresVig">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Tipo de Documento Modificación</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputDocMod" name="inputDocMod">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">No. Documento Modificación</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputNoDocMod" name="inputNoDocMod">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Fecha del comprobante</label>
                                                </div>
                                                <input type="date" class="form-control" id="inputFecCom" name="inputFecCom">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Saldo flotante</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputSalFlo" name="inputSalFlo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Descripción</label>
                                                </div>
                                                <textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 text-left">
                                            <button class="btn btn-warning btn-circle text-center" id="btnBloquear" name="btnBloquear"><i class="fas fa-lock text-center"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <h4 class="text-center text-info">Datos crédito</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Partida Presupuestaria</label>
                                                </div>
                                                <select class="custom-select" id="sltPartPresu" name="sltPartPresu" onchange="partPresuDet(this.value)">
                                                    <option selected>Selecciona una opción</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Monto</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputMonto" name="inputMonto">
                                            </div>
                                        </div>
                                        <div class="col-sm-1 text-left">
                                            <button class="btn btn-info btn-circle" id="btnAgregarEncabezado" name="btnAgregarEncabezado"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input class="form-control" id="inputNuevaPartida" hidden>
                                    </div>
                                    <table class="table margen" id="tblDetaModiPresu">
                                        <thead class="stylish-color white-text">

                                            <th scope="col">Fecha de registro</th>
                                            <th scope="col">Monto</th>
                                            <th scope="col">Tipo de documento</th>
                                            <th scope="col">Número de documento</th>
                                            <th scope="col">Partida presupuestaria</th>
                                            <th scope="col">Fecha del comprobante</th>

                                        </thead>
                                        <tbody id="tbodyDetModPres">

                                        </tbody>
                                    </table>
                                    <div class="modal-footer">
                                            <button class="btn btn-primary btn-md" id="btnGuarModPres" name="btnGuarModPres"><i class="far fa-save"></i> Guardar</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contCred" role="tabpanel" aria-labelledby="tabCred">
                                    <input type="text" class="form-control" id="inputNumPartidaCred">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Fecha de registro</span>
                                                </div>
                                                <input type="date" class="form-control" id="inputFechRegis" name="inputFechRegis">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Saldo Inicial</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputSaldoIni" name="inputSaldoIni">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Modificación presupuestaria</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputModifiPresu" name="inputModifiPresu" onchange="operaCantidad();">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Presupuesto Vigente</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputPresuVige" name="inputPresuVige">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Tipo de Documento Modificación</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputDocuModifi" name="inputDocuModifi">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">No. Documento Modificación</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputNumDocuModifi" name="inputNumDocuModifi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Fecha del comprobante</label>
                                                </div>
                                                <input type="date" class="form-control" id="inputFechCompro" name="inputFechCompro">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Descripción</label>
                                                </div>
                                                <textarea class="form-control" id="txtDescripcionCred" name="txtDescripcionCred"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                            <button class="btn btn-primary btn-md text-center" id="btnGuardCred" name="btnGuardCred"><i class="far fa-save" style="margin-right: 10px"></i>Guardar</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contDeb" role="tabpanel" aria-labelledby="tabDeb">
                                    <input type="text" class="form-control" id="inputNumPartidaDeb">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Fecha de registro</span>
                                                </div>
                                                <input type="date" class="form-control" id="inptFechReg" name="inptFechReg">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Saldo Inicial</label>
                                                </div>
                                                <input type="text" class="form-control" id="inptSaldIni" name="inptSaldIni">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Modificación presupuestaria</label>
                                                </div>
                                                <input type="text" class="form-control" id="inptModiPresu" name="inptModiPresu" onchange="operacionCantidad();">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Presupuesto Vigente</label>
                                                </div>
                                                <input type="text" class="form-control" id="inptPresuVigen" name="inptPresuVigen">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Tipo de Documento Modificación</label>
                                                </div>
                                                <input type="text" class="form-control" id="inptDoctoModi" name="inptDoctoModi">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">No. Documento Modificación</label>
                                                </div>
                                                <input type="text" class="form-control" id="inptNumDoctoModifi" name="inptNumDoctoModifi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Fecha del comprobante</label>
                                                </div>
                                                <input type="date" class="form-control" id="inptFechCompro" name="inptFechCompro">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text">Descripción</label>
                                                </div>
                                                <textarea class="form-control" id="txtDescripDeb" name="txtDescripDeb"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary btn-md text-center" id="btnGuardDebi" name="btnGuardDebi"><i class="far fa-save" style="margin-right: 10px"></i>Guardar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
 <!--Fin Modal Nueva Partida-->


<script type="text/javascript" src="./js/js_Presupuesto.js"></script>
<script type="text/javascript" src="./js/js_FnGenerales.js"></script>
