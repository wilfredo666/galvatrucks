<?php

namespace App\Models;

use CodeIgniter\Model;

class MServicio extends Model
{
    protected $table      = 'servicio';
    protected $primaryKey = 'id_servicio';

    protected $returnType     = 'array';

    protected $allowedFields = ['cod_servicio', 'id_cliente', 'id_emp_maritima', 'fecha_inicio_servicio', 'num_bill', 'nro_contenedor', 'medida_contenedor', 'peso_mercaderia', 'detalle_mercaderia', 'origen_mercaderia', 'destino_mercaderia', 'fecha_arribo', 'fecha_almacen', 'id_asignacion', 'id_contrato_camion', 'id_ruta', 'costo_servicio', 'documento', 'observaciones', 'activo_serv'];

    public function InfoServicio($id)
    {
        $this->select("*");
        $this-> join("cliente",'cliente.id_cliente=servicio.id_cliente');
        $this-> join("empresa_maritima",'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
        $this-> join("ruta",'ruta.id_ruta=servicio.id_ruta');
        $this-> join("asignacion",'asignacion.id_asignacion=servicio.id_asignacion');
        $this->where("id_servicio", $id);
        $resultado = $this->first();
        return $resultado;
    }

    public function lista_consultas(){
        $this->select("*");
        $this-> join("cliente",'cliente.id_cliente=servicio.id_cliente');
        $this-> join("empresa_maritima",'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
         $this-> join("asignacion",'asignacion.id_asignacion=servicio.id_asignacion');
        $this-> join("ruta",'ruta.id_ruta=servicio.id_ruta');
        $resultado=$this->findAll();
        return $resultado;
    }
}