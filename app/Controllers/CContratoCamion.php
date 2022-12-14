<?php

namespace App\Controllers;

use App\Models\MContratoCamion;

class CContratoCamion extends BaseController
{
  public function __construct()
  {
    $this->MContratoCamion = new MContratoCamion();
  }

  public function index()
  {
    $data = array(
      "contratoCamion" => $this->MContratoCamion->listaContrato()
    );

    echo view('header');
    echo view('contratoCamion/contratoCamion', $data);
    echo view('footer');
  }

  /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO CONTRATO DE CAMION
    --------------------------------------*/
  public function FNuevoContratoCam()
  {
    echo view("contratoCamion/FNuevoContratoCam");
  }

  public function RegContratoCam()
  {
    $nomContrato = $_POST["nomContrato"];
    $placaCon = $_POST["placaCon"];
    $fechaIni = $_POST["fechaIni"];
    $fechaFin = $_POST["fechaFin"];
    $propietario = $_POST["propietario"];
    $obsCon = $_POST["obsCon"];


    $data = array(
      "fecha_inicio_contrato" => $fechaIni,
      "fecha_fin_contrato" => $fechaFin,
      "num_contrato" => $nomContrato,
      "placa" => $placaCon,
      "propietario_camion" => $propietario,
      "observacion" => $obsCon
    );

    $this->MContratoCamion->insert($data);
  }
  /* --------------------------------------
      FUNCIONES PARA VER CONTRATO DE CAMION
    --------------------------------------*/
  public function MVerContratoCam()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "contratoCam" => $this->MContratoCamion->InfoContratoCam($id)
    );
    echo view("contratoCamion/MVerContratoCam", $data);
  }
  /* --------------------------------------
      FUNCIONES PARA EDITAR CONTRATO DE CAMION
    --------------------------------------*/
  public function FEditContratoCam()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "contratoCam" => $this->MContratoCamion->InfoContratoCam($id)
    );
    echo view("contratoCamion/FEditContratoCam", $data);
  }

  public function EditContratoCam()
  {
    $id = $this->request->uri->getSegment(3);

    $nomContrato = $_POST["nomContrato"];
    $placaCon = $_POST["placaCon"];
    $fechaIni = $_POST["fechaIni"];
    $fechaFin = $_POST["fechaFin"];
    $propietario = $_POST["propietario"];
    $obsCon = $_POST["obsCon"];


    $data = array(
      "fecha_inicio_contrato" => $fechaIni,
      "fecha_fin_contrato" => $fechaFin,
      "num_contrato" => $nomContrato,
      "placa" => $placaCon,
      "propietario_camion" => $propietario,
      "observacion" => $obsCon
    );

    $this->MContratoCamion->update($id, $data);
  }

  /* --------------------------------------
      FUNCIONES PARA ELIMINAR CONTRATO DE CAMION
    --------------------------------------*/
  public function FEliContratoCam()
  {
    $id = $this->request->uri->getSegment(3);
    echo view("contratoCamion/FEliContratoCamion", compact("id"));
  }
  public function EliContratoCam(){
    $id = $this->request->uri->getSegment(3);
    /* $this->MContratoCamion->delete($id); */
    $estado_contrato = 0;
    $data = array(
      "estado_contrato" => $estado_contrato
    );
    $this->MContratoCamion->update($id,$data);
  }
}
