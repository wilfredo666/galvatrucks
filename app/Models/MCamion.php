<?php

namespace App\Models;

use CodeIgniter\Model;

class MCamion extends Model
{
    protected $table      = 'camion';
    protected $primaryKey = 'id_camion';

    protected $returnType     = 'array';

    protected $allowedFields = ['placa', 'clase', 'ejes', 'capacidad', 'chasis', 'marca', 'color', 'activo_cam', 'estado_camion'];


    public function listaCamiones()
    {
        $this->select("*");
        $this->where("estado_camion", 1 );
        $resultado = $this->findAll();
        return $resultado;
    }

    public function InfoCamion($id)
    {
        $this->select("*");
        $this->where("id_camion", $id);
        $resultado = $this->first();
        return $resultado;
    }
}