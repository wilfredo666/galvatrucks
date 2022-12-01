<?php

namespace App\Models;

use CodeIgniter\Model;

class MRuta extends Model
{
    protected $table      = 'ruta';
    protected $primaryKey = 'id_ruta';

    protected $returnType     = 'array';

    protected $allowedFields = ['ruta_inicio', 'ruta_fin', 'kilometros', 'combustible', 'estado_ruta'];

    public function listaRutas()
    {
        $this->select("*");
        $this->where("estado_ruta", 1);
        $resultado = $this->findAll();
        return $resultado;
    }

    public function InfoRuta($id)
    {
        $this->select("*");
        $this->where("id_ruta", $id);
        $resultado = $this->first();
        return $resultado;
    }
}
