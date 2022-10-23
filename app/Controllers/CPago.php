<?php

namespace App\Controllers;

use App\Models\MPago;
use App\Models\MServicio;
use App\Models\MCliente;
use App\Models\MEmpresaMaritima;

class CPago extends BaseController
{
  public function __construct()
  {
    $this->MPago = new MPago();
    $this->MServicio = new MServicio();
    $this->MCliente = new MCliente();
    $this->MEmpresaMaritima = new MEmpresaMaritima();
  }

  public function index()
  {
    $data = array(
      "pagos" => $this->MPago->InfoPago(),
      /* "datosClientes" => $this->MServicio->lista_consultas5() */
    );

    echo view('header');
    echo view('pago/pago', $data);
    echo view('footer');
  }
 /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO pago 
    --------------------------------------*/
  public function NuevoPago(){
    $data = array(
      "datosServ" => $this->MServicio->findAll()
    );

    echo view('header');
    echo view('pago/nuevoPago', $data);
    echo view('footer');

    /* var_dump($data); */
  }
}
