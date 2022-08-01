<?php

namespace App\Models;

use CodeIgniter\Model;

class MAsignacion extends Model
{
    protected $table      = 'asignacion';
    protected $primaryKey = 'id_asignacion';

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre_asig', 'fecha_asig', 'fecha_baja_asig','id_camion','id_conductor','activo'];

}