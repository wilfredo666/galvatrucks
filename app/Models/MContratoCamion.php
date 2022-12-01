<?php

namespace App\Models;

use CodeIgniter\Model;

class MContratoCamion extends Model
{
    protected $table      = 'contrato_camion';
    protected $primaryKey = 'id_contrato_camion';

    protected $returnType     = 'array';

    protected $allowedFields = ['fecha_inicio_contrato', 'fecha_fin_contrato', 'num_contrato', 'placa', 'propietario_camion', 'observacion', 'estado_contrato'];

    public function listaContrato()
    {
        $this->select("*");
        $this->where("estado_contrato", 1);
        $resultado = $this->findAll();
        return $resultado;
    }

    public function InfoContratoCam($id)
    {
        $this->select("*");
        $this->where("id_contrato_camion", $id);
        $resultado = $this->first();
        return $resultado;
    }
}