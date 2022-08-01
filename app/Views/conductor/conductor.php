<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">

        <div class="container-fluid">
            <table id="DataTableUsuario" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th> C.I.</th>
                        <th>CATEGORIA LICENCIA</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>DIRECCION</th>
                        <th>CORREO ELECTRONICO</th>
                        <th>NUMERO DE TELEFONO</th>
                        <th>PERSONA DE CONTACTO / CELULAR</th>
                        <th>ESTADO CIVIL</th>
                        <th>CUENTA BANCARIA 1</th>
                        <th>CUENTA BANCARIA 2</th>
                        <th>IMAGEN</th>
                        <th><button class="btn btn-block btn-primary"><i class="fas fa-plus-circle"></i> NUEVO</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conductor as $lista) {
                        $idCond = $lista['id_conductor'];
                        $nomCond = $lista['nombre_cond'];
                        $apellidoCond = $lista['apellido_cond'];
                        $ciCocnd = $lista['ci_cond'];
                        $categoriaCond = $lista['tipo_licencia'];
                        $fechaNac = $lista['fecha_nac_cond'];
                        $direccionCond = $lista['direccion_cond'];
                        $email = $lista['email_cond'];
                        $telefono = $lista['contacto_cond'];
                        $persContacto = $lista['persona_contacto_cond'];
                        $estadoCivil = $lista['estado_civil_cond'];
                        $cuentaBanc1 = $lista['num_cuenta_cond'];
                        $cuentaBanc2 = $lista['num_cuenta2_cond'];
                        $imagenCond = $lista['imagen_cond'];

                    ?>
                        <tr>
                            <td><?php echo  $idCond; ?></td>
                            <td><?php echo  $nomCond; ?></td>
                            <td><?php echo  $apellidoCond; ?></td>
                            <td><?php echo  $ciCocnd; ?></td>
                            <td><?php echo  $categoriaCond; ?></td>
                            <td><?php echo  $fechaNac; ?></td>
                            <td><?php echo  $direccionCond; ?></td>
                            <td><?php echo  $email; ?></td>
                            <td><?php echo  $telefono; ?></td>
                            <td><?php echo  $persContacto; ?></td>
                            <td><?php echo  $estadoCivil; ?></td>
                            <td><?php echo  $cuentaBanc1; ?></td>
                            <td><?php echo  $cuentaBanc2; ?></td>
                            <td><?php echo  $imagenCond; ?></td>
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
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->