<?php

namespace App\Controllers;

use App\Models\MConductor;
use App\Models\MServicio;

class CConductor extends BaseController
{
  public function __construct()
  {
    $this->MConductor = new MConductor();
    $this->MServicio = new MServicio();
  }

  public function index()
  {
    $data = array(
      "conductor" => $this->MConductor->listaConductores()
    );

    echo view('header');
    echo view('conductor/conductor', $data);
    echo view('footer');
  }
  /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO  CONDUCTOR
    --------------------------------------*/
  public function FNuevoConductor()
  {
    echo view("conductor/FNuevoConductor");
  }

  public function RegConductor()
  {
    $nomConductor = $_POST["nomConductor"];
    $apConductor = $_POST["apConductor"];
    $ciCond = $_POST["ciCond"];
    $categoria = $_POST["categoria"];
    $fechaNac = $_POST["fechaNac"];
    $estadoCond = $_POST["estadoCond"];
    $dirCond = $_POST["dirCond"];
    $correoCond = $_POST["correoCond"];
    $contactoCond = $_POST["contactoCond"];
    $ctaCond = $_POST["ctaCond"];
    $cta2Cond = $_POST["cta2Cond"];
    $personaContacto = $_POST["personaContacto"];
    $fotoCond = $_FILES["fotoCond"];

    $ruta = "assest/img/conductor/";
    $foto = $fotoCond["name"];
    $tmpFoto = $fotoCond["tmp_name"];
    move_uploaded_file($tmpFoto, $ruta . $foto);


    $data = array(
      "nombre_cond" => $nomConductor,
      "apellido_cond" => $apConductor,
      "ci_cond" => $ciCond,
      "tipo_licencia" => $categoria,
      "fecha_nac_cond" => $fechaNac,
      "direccion_cond" => $dirCond,
      "email_cond" => $correoCond,
      "contacto_cond" => $contactoCond,
      "persona_contacto_cond" => $personaContacto,
      "estado_civil_cond" => $estadoCond,
      "num_cuenta_cond" => $ctaCond,
      "num_cuenta2_cond" => $cta2Cond,
      "imagen_cond" => $foto
    );

    $this->MConductor->insert($data);
  }
  /* --------------------------------------
      FUNCIONES PARA VER CONDUCTOR
    --------------------------------------*/
  public function MVerConductor()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "conductor" => $this->MConductor->InfoConductor($id)
    );
    echo view("conductor/MVerConductor", $data);
  }
  /* --------------------------------------
      FUNCIONES PARA EDITAR  CONDUCTOR
    --------------------------------------*/
  public function FEditConductor()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "conductor" => $this->MConductor->InfoConductor($id)
    );
    echo view("conductor/FEditConductor", $data);
  }

  public function EditConductor()
  {
    $id = $this->request->uri->getSegment(3);

    $nomConductor = $_POST["nomConductor"];
    $apConductor = $_POST["apConductor"];
    $ciCond = $_POST["ciCond"];
    $categoria = $_POST["categoria"];
    $fechaNac = $_POST["fechaNac"];
    $estadoCond = $_POST["estadoCond"];
    $dirCond = $_POST["dirCond"];
    $correoCond = $_POST["correoCond"];
    $contactoCond = $_POST["contactoCond"];
    $ctaCond = $_POST["ctaCond"];
    $cta2Cond = $_POST["cta2Cond"];
    $personaContacto = $_POST["personaContacto"];
    $fotoCond = $_FILES["fotoCond"];

    if ($fotoCond["name"] == "") {
      $foto = $_POST["fotoCondActual"];
    } else {
      $ruta = "assest/img/conductor/";
      $foto = $fotoCond["name"];
      $tmpFoto = $fotoCond["tmp_name"];
      move_uploaded_file($tmpFoto, $ruta . $foto);
    }


    $data = array(
      "nombre_cond" => $nomConductor,
      "apellido_cond" => $apConductor,
      "ci_cond" => $ciCond,
      "tipo_licencia" => $categoria,
      "fecha_nac_cond" => $fechaNac,
      "direccion_cond" => $dirCond,
      "email_cond" => $correoCond,
      "contacto_cond" => $contactoCond,
      "persona_contacto_cond" => $personaContacto,
      "estado_civil_cond" => $estadoCond,
      "num_cuenta_cond" => $ctaCond,
      "num_cuenta2_cond" => $cta2Cond,
      "imagen_cond" => $foto
    );
    $this->MConductor->update($id, $data);
  }
  /* --------------------------------------
      FUNCIONES PARA ELIMINAR CONDUCTOR
    --------------------------------------*/
  public function FEliConductor()
  {
    $id = $this->request->uri->getSegment(3);

    echo view("conductor/FEliConductor", compact("id"));
  }

  public function EliConductor()
  {
    $id = $this->request->uri->getSegment(3);
    /* $this->MConductor->delete($id); */
    $estado_conductor = 0;
    $data = array(
      "estado_conductor" => $estado_conductor
    );
    $this->MConductor->update($id,$data);
  }

  /*Reportes de servicio por conductor */
  public function repConductor()
  {
    $data = array(
      "conductor" => $this->MConductor->findAll()
    );

    echo view('header');
    echo view('conductor/repConductor', $data);
    echo view('footer');
  }

  public function reporteCond()
  {
    $id = $_POST["conductor"];
    $fechaDesde = $_POST["fechaDesde"];
    $fechaHasta = $_POST["fechaHasta"];

    $sql = array(
      "idConductor" => $id,
      "fechaDesde" => $fechaDesde,
      "fechaHasta" => $fechaHasta
    );

    $data = array(
      "conductor" => $this->MConductor->InfoConductor($id),
      "servicios" => $this->MServicio->InfoServConductor($sql)
    );
  echo view('conductor/conductors', $data);
  }
}
