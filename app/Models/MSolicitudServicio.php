<?php

namespace App\Models;

use CodeIgniter\Model;

class MSolicitudServicio extends Model
{
    protected $table      = 'solicitud_servicio';
    protected $primaryKey = 'id_solicitud';

    protected $returnType     = 'array';

    protected $allowedFields = ['id_emp_maritima', 'numero_bill', 'numero_cont', 'tam_cont', 'peso_cont', 'doc1', 'doc2', 'doc3', 'doc4', 'observaciones', 'activo_solicitud'];



    public function lista_consultas(){
        $this->select("*");
        $this->join('empresa_maritima','empresa_maritima.id_emp_maritima = solicitud_servicio.id_emp_maritima');
        $resultado=$this->findAll();
        return $resultado;
    }
}
