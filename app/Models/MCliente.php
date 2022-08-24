<?php

namespace App\Models;

use CodeIgniter\Model;

class MCliente extends Model
{
    protected $table      = 'cliente';
    protected $primaryKey = 'id_cliente';

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre_cli', 'apellido_cli', 'ci_nit_cli', 'fecha_nac_cli', 'estado_civil_cli', 'num_cuenta_cli', 'num_cuenta2_cli', 'razon_social_cli', 'direccion_cli', 'email_cli', 'contacto_cli', 'persona_contacto_cli', 'tipo_cli', 'imagen_cli', 'activo_cli'];


    public function InfoCliente($id)
    {
        $this->select("*");
        $this->where("id_cliente", $id);
        $resultado = $this->first();
        return $resultado;
    }
}
