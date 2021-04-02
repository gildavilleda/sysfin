<div id="vcontent" class="container2 margenCard">
    <div id="cardDatPartNue" class="card">
        <div class="modal-header text-center white-text gradientP">
            <h3 class="modal-title w-100 font-weight-bold">Datos Partida</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#cardDatPartNue').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active text-warning font-weight-bold" id="nav-programa-tab" data-toggle="tab" href="#nav-programa" role="tab" aria-controls="nav-programa" aria-selected="true">Programa</a>
                    <a class="nav-item nav-link text-warning font-weight-bold" id="nav-subprograma-tab" data-toggle="tab" href="#nav-subprograma" role="tab" aria-controls="nav-subprograma" aria-selected="false">Sub-Programa</a>
                    <a class="nav-item nav-link text-warning font-weight-bold" id="nav-subproducto-tab" data-toggle="tab" href="#nav-subproducto" role="tab" aria-controls="nav-subproducto" aria-selected="false">Sub-Producto</a>
                </div>
            </nav>
            <div class="tab-content " id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-programa" role="tabpanel" aria-labelledby="nav-programa-tab">
                    <div class="card-body">
                        <div class="row margen">
                               <div class="col-sm-4">
                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <label class="input-group-text">Programa</label>
                                       </div>
                                       <input type="text" class="form-control" id="inputPrograma" name="inputPrograma">
                                   </div>
                               </div>
                               <div class="col-sm-8">
                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <label class="input-group-text">Nombre del programa</label>
                                       </div>
                                       <input type="text" class="form-control" id="inputNomPrograma" name="inputNomPrograma">
                                   </div>
                               </div>
                           </div>
                        <div class="row">
                                   <div class="col align-self-start">
                                   </div>
                                   <div class="col align-self-center">
                                   </div>
                                   <div class="col align-self-end text-right">
                                       <button class="btn btn-info btn-md" id="btnAgrProg" name="btnAgrProg">Guardar</button>
                                   </div>
                           </div>
                        <div class="row margen">
                               <table class="table table-striped">
                                   <thead class="stylish-color white-text font-weight-bold text-center">
                                       <tr>
                                           <th width="250">Programa</th>
                                           <th scope="col">Nombre del Programa</th>
                                       </tr>
                                   </thead>
                                   <tbody id="tblBodyPrograma">

                                   </tbody>
                               </table>
                           </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-subprograma" role="tabpanel" aria-labelledby="nav-subprograma-tab">
                    <div class="card-body">
                        <div class="row margen">
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Programa</label>
                                    </div>
                                    <select class="custom-select" id="sltProg" name="sltProg">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row margen">
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Sub-Programa</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputSubPrograma" name="inputSubPrograma">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Nombre del sub-programa</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputNomSubPrograma" name="inputNomSubPrograma">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                            </div>
                            <div class="col align-self-center">
                            </div>
                            <div class="col align-self-end text-right">
                                <button class="btn btn-info btn-md" id="btnAgrSubProg" name="btnAgrSubProg">Guardar</button>
                            </div>
                        </div>
                        <div class="row margen">
                            <table class="table table-striped">
                                <thead class="stylish-color white-text font-weight-bold text-center">
                                <tr>
                                    <th width="250">Sub-Programa</th>
                                    <th scope="col">Nombre del Sub-Programa</th>
                                </tr>
                                </thead>
                                <tbody id="tblBodySubPrograma">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-subproducto" role="tabpanel" aria-labelledby="nav-subproducto-tab">
                    <div class="card-body">
                        <div class="row margen">
                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Sub-Producto</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputSubProducto" name="inputSubProducto">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Nombre del Sub-Producto</label>
                                    </div>
                                    <input type="text" class="form-control" id="inputNomSubProducto" name="inputNomSubProducto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                            </div>
                            <div class="col align-self-center">
                            </div>
                            <div class="col align-self-end text-right">
                                <button class="btn btn-info btn-md" id="btnAgrSubProd" name="btnAgrSubProd">Guardar</button>
                            </div>
                        </div>
                        <div class="row margen">
                            <table class="table table-striped">
                                <thead class="stylish-color white-text font-weight-bold text-center">
                                <tr>
                                    <th width="250">Sub-Producto</th>
                                    <th scope="col">Nombre del Sub-producto</th>
                                </tr>
                                </thead>
                                <tbody id="tblBodySubProducto">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="./js/js_PresuAgregarDatosPartida.js"></script>
<script type="text/javascript" src="./js/js_FnGenerales.js"></script>