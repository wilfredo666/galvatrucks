<?php

namespace App\Models;

use CodeIgniter\Model;

class MMovimientosContenedor extends Model
{
    protected $table      = 'movimiento_servicio';
    protected $primaryKey = 'id_movimiento';

    protected $returnType     = 'array';

    protected $allowedFields = ['id_servicio', 'fecha_mov', 'ubicacion_mov', 'descripcion_mov', 'estado_mov', 'num_contenedor'];

    public function ListaMovContenedor($contenedor){
    $this->select("*");
    $this->where("num_contenedor", $contenedor);
    $this->where("id_movimiento ORDER BY id_movimiento DESC"); 
    $resultado = $this->findAll();
    return $resultado; 
    }

    public function InfoMovimiento($id)
    {
        $this->select("*");
        $this->where("id_movimiento", $id);
        $resultado = $this->first();
        return $resultado;
    }
  
  public function UltimoMovimiento($contenedor){
    
    $this->selectMax("id_movimiento");
    $this->where("num_contenedor", $contenedor);

    $id_movimiento = $this->first();
    
    $this->select("*");
    $this->where("id_movimiento", $id_movimiento["id_movimiento"]);

    $resultado = $this->first();
    return $resultado;
    
  }
}