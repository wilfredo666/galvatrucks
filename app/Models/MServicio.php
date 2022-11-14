<?php

namespace App\Models;

use CodeIgniter\Model;

class MServicio extends Model
{
  protected $table      = 'servicio';
  protected $primaryKey = 'id_servicio';

  protected $returnType     = 'array';

  protected $allowedFields = ['cod_servicio', 'id_cliente', 'id_emp_maritima', 'fecha_inicio_servicio', 'num_bill', 'nro_contenedor', 'medida_contenedor', 'peso_mercaderia', 'detalle_mercaderia', 'origen_mercaderia', 'destino_mercaderia', 'fecha_arribo', 'fecha_almacen', 'id_asignacion', 'id_contrato_camion', 'id_ruta', 'costo_servicio', 'documento', 'observaciones', 'id_solicitud', 'activo_serv'];

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
  public function lista_consultas5()
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $resultado = $this->first();
    return $resultado;
  }

  /* para mostrar servicios por cliente */
   public function lista_servPorCliente($idCliente){
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $this->join("empresa_maritima", 'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
    $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta');
    $this->where("servicio.id_cliente", $idCliente);
    $resultado = $this->findAll();
    return $resultado;
   }

  /*para mostrar los datos de reporte por conductor */
  public function InfoServConductor($data)
  {
    $id = $data["idConductor"];
    $fechaDesde = $data["fechaDesde"];
    $fechaHasta = $data["fechaHasta"];

    $this->select("cod_servicio, num_bill, fecha_inicio_servicio, ruta_inicio, ruta_fin, id_conductor, fecha_inicio_servicio");

    $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta');
    $this->join("asignacion", 'asignacion.id_asignacion=servicio.id_asignacion');

    $this->where("asignacion.id_conductor=$id");
    /*    $this->where("asignacion.id_conductor=$id") AND ("fecha_inicio_servicio BETWEEN $fechaDesde and $fechaHasta"); */
    $this->where("fecha_inicio_servicio between '$fechaDesde' and '$fechaHasta' ");
    $resultado = $this->findAll();
    return $resultado;
  }

  /* ==============================
  PARA MOSTRAR REPORTE DE CLIENTE
  ================================ */
  public function InfoServCliente($serv)
  {
    $id = $serv["idCliente"];
    $fechaDesde = $serv["fechaDesde"];
    $fechaHasta = $serv["fechaHasta"];

    $this->select("*");
    /*   $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');  */
    $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta');
    $this->where("id_cliente", $id);
    $this->where("fecha_inicio_servicio between '$fechaDesde' and '$fechaHasta' ");
    $this->where("fecha_inicio_servicio ORDER BY fecha_inicio_servicio  DESC ");
    $resultado = $this->findAll();
    return $resultado;
    /* var_dump($resultado); */
  }
  /* PARA REPORTE DEL ROL CLIENTE */
  public function lista_servicios($id_cliente)
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $this->where("servicio.id_cliente", $id_cliente);
    /* $this->where("activo_serv", 1); */
    $resultado = $this->findAll();
    return $resultado;
  }
  /* para ver servicios rol cliente consulta por fechas */
  public function InfoServClienteFechas($serv)
  {
    $id = $serv["idCliente"];
    $fechaDesde = $serv["fechaDesde"];
    $fechaHasta = $serv["fechaHasta"];

    $this->select("*");
    /*   $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');  */
    /* $this->join("ruta", 'ruta.id_ruta=servicio.id_ruta'); */
    $this->where("id_cliente", $id);
    $this->where("fecha_inicio_servicio between '$fechaDesde' and '$fechaHasta' ");
    $this->where("fecha_inicio_servicio ORDER BY fecha_inicio_servicio  DESC ");
    $resultado = $this->findAll();
    return $resultado;
  }
  /* contador de servicios finalizados cliente */
  public function InfoServClienteContador($id_cliente)
  {
    $this->select("*");
    $this->where("id_cliente", $id_cliente);
    $this->where("activo_serv", 0);
    $resultado = $this->countAllResults();
    return $resultado;
  }
  
  /* --------------------------------------------- */
  public function BusContendor($contenedor)
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');

    $this->where("nro_contenedor", $contenedor);
    /* $this->where("activo_serv", 1); */
    $resultado = $this->findAll();
    return $resultado;

    /* var_dump($resultado); */
  }
  public function BusContendorCli($contenedor,$id_cliente){
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');

    $this->where("nro_contenedor", $contenedor);
    $this->where("servicio.id_cliente", $id_cliente);
    $resultado = $this->findAll();
    return $resultado;
  }

  public function BusContendorGeneral($contenedor)
  {
    $this->select("*");
    $this->where("nro_contenedor", $contenedor);
    $resultado = $this->findAll();
    return $resultado;
  }
/* para buscar contenedores en el seguimiento y mandar al datalist */
  public function BuscarContendor(){
    $this->select("*");
    $resultado = $this->findAll();
    return $resultado;
  }
  public function BuscarContendorCliente($id_cliente){
    $this->select("*");
    $this->where("id_cliente", $id_cliente);
    $resultado = $this->findAll();
    return $resultado;
  }

  public function ServContenedor($id_servicio)
  {
    $this->select("*");
    /* $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente'); */
    $this->where("id_servicio", $id_servicio);
    $resultado = $this->findAll();
    return $resultado;
  }
  public function ServicioBill($idServicio)
  {
    $this->select("*");
    /* $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente'); */
    $this->where("id_servicio", $idServicio);
    $resultado = $this->findAll();
    return $resultado;
  }
  /* buscar bill para pagos */
  public function BusNroBill($nroBillMayus)
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $this->join("empresa_maritima", 'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
    $this->where("num_bill", $nroBillMayus);
    $resultado = $this->findAll();
    return $resultado;
  }
  public function BusNroBillId($id)
  {
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente=servicio.id_cliente');
    $this->join("empresa_maritima", 'empresa_maritima.id_emp_maritima=servicio.id_emp_maritima');
    $this->where("id_servicio", $id);
    $resultado = $this->findAll();
    return $resultado;
  }
  public function ContarServicio(){
    $this->select("*");
    $resultado = $this->countAllResults();
    return $resultado;
  }
  public function contarServCli($idCli){
    $this->select("*");
    $this->where("id_cliente", $idCli);
    $resultado = $this->countAllResults();
    return $resultado;
  }
  
}
