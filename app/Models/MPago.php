<?php

namespace App\Models;

use CodeIgniter\Model;

class MPago extends Model
{
    protected $table      = 'pago_naviera';
    protected $primaryKey = 'id_pago';

    protected $returnType     = 'array';

    protected $allowedFields = ['numero_bill', 'concepto', 'monto', 'tipo_moneda', 'fecha_pago', 'id_servicio', 'activo_pago'];


    public function InfoPago()
    {
        $this->select("*");
        /* $this->where("id_ruta", $id); */
        $this-> join("servicio",'servicio.id_servicio=pago_naviera.id_servicio');
        $resultado = $this->findAll();
        return $resultado;
    }
    public function BusPagosBill($nroBillMayus){
        $this->select("*");
        $this->where("numero_bill", $nroBillMayus);
        $this->where("activo_pago", 1);
        /* $this-> join("servicio",'servicio.id_servicio=pago_naviera.id_servicio'); */
        $resultado = $this->findAll();
        return $resultado;
    }
    /* para llevar datos de pagos a editar pago */
    public function BusPagosId($idPago){
        $this->select("*");
        $this->where("id_pago", $idPago);
        $resultado = $this->first();
        return $resultado;
    }
    public function BusPagosBillId($id){
        $this->select("*");
        $this->where("id_servicio", $id);
        $this->where("activo_pago", 1);
        $resultado = $this->findAll();
        return $resultado;
    }

    public function sumarPagos($id){
        $this->select("sum(monto) AS sumaMonto");
        $this->where("id_servicio", $id);
        $this->where("activo_pago", 1);
        $resultado = $this->first();
        return $resultado;
    }
    
}