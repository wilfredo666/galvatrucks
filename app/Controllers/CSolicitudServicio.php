<?php

namespace App\Controllers;

use App\Models\MSolicitudServicio;
use App\Models\MEmpresaMaritima;

class CSolicitudServicio extends BaseController
{
  public function __construct()
  {
    $this->MSolicitudServicio = new MSolicitudServicio();
    $this->MEmpresaMaritima = new MEmpresaMaritima();
  }

  public function index()
  {
    $data = array(
      "solicitud" => $this->MSolicitudServicio->lista_consultas()
    );

    echo view('header');
    echo view('solicitudServicio/solicitudServ', $data);
    echo view('footer');

  }
 /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVA SOLICITUD
    --------------------------------------*/

}
