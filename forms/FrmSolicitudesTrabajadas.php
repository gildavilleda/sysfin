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
            <h3 class="modal-title w-100 font-weight-bold">Solicitudes Trabajadas</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>
        <br>
        <div class="col-sm-10 offset-sm-1" id="contenedorSR">

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text gradientP">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Estados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Estado 1 (definir nombre)</div>
                    <div class="card-body">
                        <h5 class="card-title">Aprobado</h5>
                        <p class="card-text"></p>
                    </div>
                </div>

                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Estado 2 (definir nombre)</div>
                    <div class="card-body">
                        <h5 class="card-title">Aprobado</h5>
                        <p class="card-text"></p>
                    </div>
                </div>

                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Estado 3 (definir nombre)</div>
                    <div class="card-body">
                        <h5 class="card-title">Aprobado</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Estado 4 (definir nombre)</div>
                    <div class="card-body">
                        <h5 class="card-title">En proceso</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Estado 5 (definir nombre)</div>
                    <div class="card-body">
                        <h5 class="card-title">Pendiente</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
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
<script type="text/javascript" src="./js/js_SolTrabajadas.js"></script>