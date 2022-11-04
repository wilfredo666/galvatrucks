<?php

namespace App\Models;

use CodeIgniter\Model;

class MSolicitudServicio extends Model
{
  protected $table      = 'solicitud_servicio';
  protected $primaryKey = 'id_solicitud';

  protected $returnType     = 'array';

  protected $allowedFields = ['id_emp_maritima', 'numero_bill', 'numero_cont', 'tam_cont', 'peso_cont', 'fecha_solicitud', 'doc_bill', 'doc_factura', 'doc_lista_empaque', 'doc_otros', 'observaciones', 'id_cliente', 'activo_solicitud', 'activo_soli_serv'];



  public function lista_consultas($id){
    $this->select("*");
    $this->join('empresa_maritima','empresa_maritima.id_emp_maritima = solicitud_servicio.id_emp_maritima');
    $this->where("id_cliente", $id);
    $resultado=$this->findAll();
    return $resultado;
  }

  public function InfoSolicitud($id){
    $this->select("*");
    $this->join("cliente", 'cliente.id_cliente = solicitud_servicio.id_cliente');
    $this->join('empresa_maritima','empresa_maritima.id_emp_maritima = solicitud_servicio.id_emp_maritima');
    $this->where("id_solicitud", $id);
    $resultado=$this->first();
    return $resultado;
  }

  public function DetalleSolicitud($data){
    $estado= $data["estado"];
    /* $fechaDesde= $data["fechaDesde"];
    $fechaHasta= $data["fechaHasta"]; */

    $this->select("id_solicitud, razon_social_emp, razon_social_cli, fecha_solicitud, doc_bill, doc_factura, doc_lista_empaque, doc_otros, observaciones, activo_solicitud");

    $this->join("cliente", 'cliente.id_cliente = solicitud_servicio.id_cliente');
    $this->join('empresa_maritima','empresa_maritima.id_emp_maritima = solicitud_servicio.id_emp_maritima');

    if($estado!="Todos"){
      $this->where("activo_solicitud", $estado);
    }

    /* $this->where("fecha_solicitud between '$fechaDesde' and '$fechaHasta' ORDER BY id_solicitud DESC");  */
    $this->where("id_solicitud ORDER BY id_solicitud DESC"); 

    $resultado=$this->findAll();
    return $resultado;
    /* var_dump($resultado); */
  }

  public function SolicitudesPendientes(){
    $this-> select("*");
    $this-> join("cliente", 'cliente.id_cliente = solicitud_servicio.id_cliente');
    $this-> where("activo_solicitud", "aceptado");
    $this-> where("activo_soli_serv", 0);
    $resultado=$this->findAll();
    return $resultado;
    /* var_dump($resultado); */
  }
  /* CONTADOR SOLICTUDES PARA PANEL CLIENTE */
  public function InfoServClienteContador2($id_cliente)
  {
    $this->select("*");
    $this->where("id_cliente", $id_cliente);
    $resultado = $this->countAllResults();
    return $resultado;
  }
  /* para contar las solicitudes */
  public function ContarSolicitudes($estado){
    $this->select("*");
    $this->where("activo_solicitud",$estado);
    $resultado = $this->countAllResults();
    return $resultado;
  }
  public function contarServPenCli($idCli, $estado){
    $this->select("*");
    $this->where("id_cliente", $idCli);
    $this->where("activo_solicitud", $estado);
    $resultado = $this->countAllResults();
    return $resultado;
  }
}
