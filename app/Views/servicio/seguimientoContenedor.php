<div class="content-wrapper">
    <div class="container-fluid">
        <br>
        <div class=" titulo col-md-12">
            <h2 class="text-center">
                <font class="display-4">Seguimiento de Contenedor</font>
            </h2>
            <hr class="hr-seguimiento">
        </div>

        <br>
        <div class="row ">
            <div class="col-md-3">
            </div>
            <div class="col-md-5 col-sm-6">
                <input type="text" class="form-control form-control input-seguimiento" id="numContenedor" name="numContenedor" style='text-transform:uppercase'>
                <p class="font-italic intruzca" style="font-size: 1.1rem;">Introduzca el Número del Contenedor</p>
            </div>
            <div class="col-md-2 col-sm-6 butt">
                <button type="button" class="btn btn-outline-warning form-control buttom-buscar" id="busqueda" name="busqueda" onclick="buscarContenedor()"><i class="fas fa-search"></i> Búsqueda</button>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <div id="LlenarContenedor" class="container-llenado">

    </div>
</div>