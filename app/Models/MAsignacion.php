<?php

namespace App\Models;

use CodeIgniter\Model;

class MAsignacion extends Model
{
    protected $table      = 'asignacion';
    protected $primaryKey = 'id_asignacion';

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre_asig', 'fecha_asig', 'fecha_baja_asig','id_camion','id_conductor','activo_asig', 'estado_asignacion'];


    public function InfoAsignacion($id)
    {
        $this->select("*");
        $this-> join("conductor",'conductor.id_conductor=asignacion.id_conductor');
        $this-> join("camion",'camion.id_camion=asignacion.id_camion');
        $this->where("id_asignacion", $id);
        $resultado = $this->first();
        return $resultado;
    }

    public function lista_consultas(){
        $this->select("*");
        $this->join('camion','camion.id_camion=asignacion.id_camion');
        $this->join('conductor','conductor.id_conductor=asignacion.id_conductor');
        $this->where("estado_asignacion", 1);
        $resultado=$this->findAll();
        return $resultado;
    }
  
  public function ListaAsignaciones()
    {
        $this->select("id_asignacion, nombre_cond, apellido_cond, placa");
        $this-> join("conductor",'conductor.id_conductor=asignacion.id_conductor');
        $this-> join("camion",'camion.id_camion=asignacion.id_camion');
        $resultado = $this->findAll();
        return $resultado;
    }

}