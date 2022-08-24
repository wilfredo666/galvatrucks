<?php

namespace App\Models;

use CodeIgniter\Model;

class MConductor extends Model
{
    protected $table      = 'conductor';
    protected $primaryKey = 'id_conductor';

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre_cond', 'apellido_cond', 'ci_cond', 'tipo_licencia', 'fecha_nac_cond', 'direccion_cond', 'email_cond', 'contacto_cond', 'persona_contacto_cond', 'estado_civil_cond', 'num_cuenta_cond', 'num_cuenta2_cond', 'imagen_cond', 'activo_cond'];


    public function InfoConductor($id)
    {
        $this->select("*");
        $this->where("id_conductor", $id);
        $resultado = $this->first();
        return $resultado;
    }
}
