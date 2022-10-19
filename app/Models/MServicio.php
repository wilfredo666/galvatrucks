<?php

namespace App\Models;

use CodeIgniter\Model;

class MServicio extends Model
{
  protected $table      = 'servicio';
  protected $primaryKey = 'id_servicio';

  protected $returnType     = 'array';

  protected $allowedFields = ['cod_servicio', 'id_cliente', 'id_emp_maritima', 'fecha_inicio_servicio', 'num_bill', 'nro_contenedor', 'medida_contenedor', 'peso_mercaderia', 'detalle_mercaderia', 'origen_mercaderia', 'destino_mercaderia', 'fecha_arribo', 'fecha_almacen', 'id_asignacion', 'id_contrato_camion', 'id_ruta', 'costo_servicio', 'documento', 'observaciones','id_solicitud', 'activo_serv'];

  public function InfoServicio($id)
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $this->join("empresa_maritima", 'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
    $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta');
    /* $this->join("asignacion", 'asignacion.id_asignacion=servicio.id_asignacion'); */
    /* $this->join("contrato_camion", 'contrato_camion.id_contrato_camion=servicio.id_contrato_camion'); */
    $this->where("id_servicio", $id);
    
    $resultado = $this->first();
    return $resultado;
  }

  public function InfoServicio2($id)
  {
    $this->select("*");
    $this->join("asignacion", 'asignacion.id_asignacion=servicio.id_asignacion');
    /* $this->join("contrato_camion", 'contrato_camion.id_contrato_camion=servicio.id_contrato_camion'); */
    $this->where("id_servicio", $id);
    $resultado = $this->first();
    return $resultado;
  }

  public function InfoServicio3($id)
  {
    $this->select("*");
    /* $this->join("asignacion", 'asignacion.id_asignacion=servicio.id_asignacion'); */
    $this->join("contrato_camion", 'contrato_camion.id_contrato_camion=servicio.id_contrato_camion');
    $this->where("id_servicio", $id);
    $resultado = $this->first();
    return $resultado;
  }

  public function lista_consultas()
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $this->join("empresa_maritima", 'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
    $this->join("asignacion", 'asignacion.id_asignacion=servicio.id_asignacion');
    $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta');
    $resultado = $this->findAll();
    return $resultado;
  }

  public function lista_consultas2()
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $this->join("empresa_maritima", 'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
    $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta');
    /* $this->where("fecha_arribo ORDER BY fecha_arribo");  */
    $resultado = $this->findAll();
    return $resultado;
  }

  /*para mostrar los datos de reporte por conductor */
  public function InfoServConductor($data){
    $id=$data["idConductor"];
    $fechaDesde=$data["fechaDesde"];
    $fechaHasta=$data["fechaHasta"];

    /* var_dump($id);
    var_dump($id);
    var_dump($id); */
    
    $this->select("cod_servicio, num_bill, fecha_inicio_servicio, ruta_inicio, ruta_fin, id_conductor, fecha_inicio_servicio");

    $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta');
    $this->join("asignacion", 'asignacion.id_asignacion=servicio.id_asignacion');
    
    $this->where("asignacion.id_conductor=$id");
 /*    $this->where("asignacion.id_conductor=$id") AND ("fecha_inicio_servicio BETWEEN $fechaDesde and $fechaHasta"); */
    $this->where("fecha_inicio_servicio between '$fechaDesde' and '$fechaHasta' "); 
    $resultado = $this->findAll();
    return $resultado;
  }

  public function BusContendor($contenedor){
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');

    $this->where("nro_contenedor", $contenedor);
    $this->where("activo_serv", 0);
    $resultado = $this->findAll();
    return $resultado; 
  }
  
  
  public function ServContenedor($id_servicio){
    $this->select("*");
    /* $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente'); */
    $this->where("id_servicio", $id_servicio);
    $resultado = $this->findAll();
    return $resultado; 
  }
}
