<?php

namespace App\Models;

use CodeIgniter\Model;

class MPago extends Model
{
    protected $table      = 'pago_naviera';
    protected $primaryKey = 'id_pago';

    protected $returnType     = 'array';

    protected $allowedFields = ['id_emp_maritima', 'concepto', 'monto', 'tipo_moneda', 'id_servicio'];


    public function InfoPago()
    {
        $this->select("*");
        /* $this->where("id_ruta", $id); */
        $this-> join("servicio",'servicio.id_servicio=pago_naviera.id_servicio');
        $resultado = $this->findAll();
        return $resultado;
    }
}