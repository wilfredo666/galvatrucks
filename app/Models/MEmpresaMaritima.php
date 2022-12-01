<?php

namespace App\Models;

use CodeIgniter\Model;

class MEmpresaMaritima extends Model
{
    protected $table      = 'empresa_maritima';
    protected $primaryKey = 'id_emp_maritima';

    protected $returnType     = 'array';

    protected $allowedFields = ['razon_social_emp', 'nit_emp', 'direccion_emp', 'correo_emp', 'contacto_emp', 'estado_emp_maritima'];

    public function listaNavieras()
    {
        $this->select("*");
        $this->where("estado_emp_maritima", 1);
        $resultado = $this->findAll();
        return $resultado;
    }

    public function InfoEmpMaritima($id)
    {
        $this->select("*");
        $this->where("id_emp_maritima", $id);
        $resultado = $this->first();
        return $resultado;
    }
}