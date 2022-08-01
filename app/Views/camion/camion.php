<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableCamion" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>PLACA</th>
            <th>CLASE DE CAMIÓN</th>
            <th>NRO DE EJES</th>
             <th>CAPACIDAD DE CARGA</th> 
            <th>NRO DE CHASIS</th>
            <th>MARCA DEL CAMIÓN</th>
            <th>COLOR</th>
            <th> <button class="btn btn-block btn-primary"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($camion as $lista){
              $idCam = $lista['id_camion'];
              $placa = $lista['placa'];
              $clase = $lista['clase'];
              $ejes = $lista['ejes'];
              $capacidad = $lista['capacidad'];
              $chasis = $lista['chasis'];
              $marca = $lista['marca'];
              $color = $lista['color'];
          ?>
            <tr>
                <td><?php echo $idCam;?></td>
                <td><?php echo $placa;?></td>
                <td><?php echo $clase;?></td>
                <td><?php echo $ejes;?></td>
                <td><?php echo $capacidad;?></td>
                <td><?php echo $chasis;?></td>
                <td><?php echo $marca;?></td>
                <td><?php echo $color;?></td>
                <td>
                <div>
                  <button class="btn btn-info btn-circle">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning btn-circle">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-danger btn-circle">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->