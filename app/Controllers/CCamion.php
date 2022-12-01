<?php

namespace App\Controllers;

use App\Models\MCamion;

class CCamion extends BaseController
{
  public function __construct()
  {
    $this->MCamion = new MCamion();
  }

  public function index()
  {
    $data = array(
      "camion" => $this->MCamion->listaCamiones()
    );

    echo view('header');
    echo view('camion/camion', $data);
    echo view('footer');
  }
 /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO CAMION 
    --------------------------------------*/
  public function FNuevoCamion()
  {
    echo view("camion/FNuevoCamion");
  }

  public function RegCamion()
  {
    $placa = $_POST["placa"];
    $clase = $_POST["clase"];
    $capacidad = $_POST["capacidad"];
    $chasis = $_POST["chasis"];
    $ejes = $_POST["ejes"];
    $marca = $_POST["marca"];
    $color = $_POST["colorCamion"];

    $data = array(
      "placa" => $placa,
      "clase" => $clase,
      "ejes" => $ejes,
      "capacidad" => $capacidad,
      "chasis" => $chasis,
      "marca" => $marca,
      "color" => $color

    );

    $this->MCamion->insert($data);
  }
 /* --------------------------------------
      FUNCIONES PARA VER CAMION 
    --------------------------------------*/
  public function MVerCamion()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "camion" => $this->MCamion->InfoCamion($id)
    );
    echo view("camion/MVerCamion", $data);
  }

   /* --------------------------------------
      FUNCIONES PARA EDITAR CAMION 
    --------------------------------------*/
  public function FEditCamion()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "camion" => $this->MCamion->InfoCamion($id)
    );
    echo view("camion/FEditCamion", $data);
  }

  public function EditCamion()
  {
    $id = $this->request->uri->getSegment(3);

    $placa = $_POST["placa"];
    $clase = $_POST["clase"];
    $capacidad = $_POST["capacidad"];
    $chasis = $_POST["chasis"];
    $ejes = $_POST["ejes"];
    $marca = $_POST["marca"];
    $color = $_POST["colorCamion"];

    $data = array(
      "placa" => $placa,
      "clase" => $clase,
      "ejes" => $ejes,
      "capacidad" => $capacidad,
      "chasis" => $chasis,
      "marca" => $marca,
      "color" => $color

    );

    $this->MCamion->update($id, $data);
  }
 /* --------------------------------------
      FUNCIONES PARA ELIMINAR CAMION 
    --------------------------------------*/
  public function FEliCamion()
  {
    $id = $this->request->uri->getSegment(3);
    echo view("camion/FEliCamion", compact("id"));
  }

  public function EliCamion()
  {
    $id = $this->request->uri->getSegment(3);
    /* $this->MCamion->delete($id); */

    $estado_camion = 0;
    $data = array(
      "estado_camion" => $estado_camion
    );
    $this->MCamion->update($id,$data);
  }
}
