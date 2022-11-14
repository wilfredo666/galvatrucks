<div class="content-wrapper">
    <form action="">
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
                <div class="col-md-2">
                </div>

                <div class="col-md-4 col-sm-6">
                    <input type="text" class="form-control form-control input-seguimiento" autocomplete="off" id="numContenedor" name="numContenedor" style='text-transform:uppercase' list="listaContenedores">
                    <datalist id="listaContenedores">
                        <?php
                        foreach ($buscarContenedor as $bus) {
                            $cont = $bus["nro_contenedor"];
                        ?>
                            <option value="<?php echo $cont ?>"></option>
                        <?php
                        }
                        ?>
                    </datalist>
                    <p class="font-italic intruzca" style="font-size: 1.1rem;">Introduzca el Número del Contenedor</p>
                </div>
                <div class="col-md-2 col-sm-6 butt">
                    <button type="button" class="btn btn-outline-warning form-control buttom-buscar" id="busqueda" name="busqueda" onclick="buscarContenedorCli()"><i class="fas fa-search"></i> Búsqueda</button>
                </div>
                <div class="col-md-2 col-sm-6 butt">
                    <input type="reset" class="btn btn-outline-info form-control buttom-buscar" value="Limpiar">
                </div>
                <div class="col-md-2">
                </div>

            </div>
        </div>
    </form>
    <div id="LlenarContenedorCli" class="container-llenado">

    </div>
</div>