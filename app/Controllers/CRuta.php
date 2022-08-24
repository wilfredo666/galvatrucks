<?php

namespace App\Controllers;

use App\Models\MRuta;

class CRuta extends BaseController
{
  public function __construct()
  {
    $this->MRuta = new MRuta();
  }

  public function index()
  {
    $data = array(
      "ruta" => $this->MRuta->findAll()
    );

    echo view('header');
    echo view('ruta/ruta', $data);
    echo view('footer');
  }
 /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO ruta 
    --------------------------------------*/
  public function FNuevoRuta()
  {
    echo view("ruta/FNuevoRuta");
  }

  public function RegRuta()
  {
    $rutaIni = $_POST["rutaIni"];
    $rutaFin = $_POST["rutaFin"];
    $distancia = $_POST["distancia"];
    $combustible = $_POST["combustible"];

    $data = array(
      "ruta_inicio" => $rutaIni,
      "ruta_fin" => $rutaFin,
      "kilometros" => $distancia,
      "combustible" => $combustible
    );

    $this->MRuta->insert($data);
  }
 /* --------------------------------------
      FUNCIONES PARA VER ruta 
    --------------------------------------*/
  public function MVerRuta()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "ruta" => $this->MRuta->InfoRuta($id)
    );
    echo view("ruta/MVerRuta", $data);
  }

   /* --------------------------------------
      FUNCIONES PARA EDITAR ruta 
    --------------------------------------*/
  public function FEditRuta()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "ruta" => $this->MRuta->InfoRuta($id)
    );
    echo view("ruta/FEditRuta", $data);
  }

  public function EditRuta()
  {
    $id = $this->request->uri->getSegment(3);

    $rutaIni = $_POST["rutaIni"];
    $rutaFin = $_POST["rutaFin"];
    $distancia = $_POST["distancia"];
    $combustible = $_POST["combustible"];

    $data = array(
      "ruta_inicio" => $rutaIni,
      "ruta_fin" => $rutaFin,
      "kilometros" => $distancia,
      "combustible" => $combustible
    );

    $this->MRuta->update($id, $data);
  }
 /* --------------------------------------
      FUNCIONES PARA ELIMINAR ruta 
    --------------------------------------*/
  public function FEliRuta()
  {
    $id = $this->request->uri->getSegment(3);
    echo view("ruta/FEliRuta", compact("id"));
  }

  public function EliRuta()
  {
    $id = $this->request->uri->getSegment(3);
    $this->MRuta->delete($id);
  }
}
