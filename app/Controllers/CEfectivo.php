<?php

namespace App\Controllers;

use App\Models\MCliente;
use App\Models\MCredito;
use App\Models\MEfectivo;


class CEfectivo extends BaseController
{
  public function __construct()
  {
    $this->MEfectivo = new MEfectivo();
    $this->MCliente = new MCliente();
    $this->MCredito = new MCredito();
  }

  public function index()
  {
    $data = array(
      "efectivo" => $this->MEfectivo->InfoEfectivo(),
    );

    echo view('header');
    echo view('efectivo/efectivo', $data);
    echo view('footer');
  }
  /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVA CUENTA
    --------------------------------------*/
  public function FNuevaCuenta()
  {
    $data = array(
      "datosCliente" => $this->MCliente->findAll()
    );
    echo view('efectivo/FNuevaCuenta', $data);
  }

  public function RegCuenta(){
    $nomCliente = $_POST["nomCliente"];
    $ctaCliente = $_POST["ctaCliente"];
    $descripcionCuenta = $_POST["descripcionCuenta"];
    $fechaApertura = $_POST["fechaApertura"];

    $data = array(
      "id_cliente" => $nomCliente,
      "cod_cuenta_cli" => $ctaCliente,
      "descripcion_cuenta_cli" => $descripcionCuenta,
      "fecha_cuenta_cli" => $fechaApertura,
    );
    $this->MEfectivo->insert($data);
  }

  /*=========================
  FUNCIONC EDITAR LA Cuenta 
  ===========================*/
  public function FEditCuenta(){
    $idCuenta = $this->request->uri->getSegment(3);
    $data = array(
      "cuenta"=> $this->MEfectivo->BusCuenta($idCuenta),
      "datosCliente" => $this->MCliente->findAll()
    );
    echo view("efectivo/FEditarCuenta", $data);
  }

  public function EditCuenta(){
    $idCuenta = $this->request->uri->getSegment(3);

    $nomCliente = $_POST["nomCliente"];
    $ctaCliente = $_POST["ctaCliente"];
    $descripcionCuenta = $_POST["descripcionCuenta"];
    $fechaApertura = $_POST["fechaApertura"];

    $data = array(
      "id_cliente" => $nomCliente,
      "cod_cuenta_cli" => $ctaCliente,
      "descripcion_cuenta_cli" => $descripcionCuenta,
      "fecha_cuenta_cli" => $fechaApertura,
    );
    $this->MEfectivo->update($idCuenta,$data);
  }
  /*PARA ELIMINAR CuentaS */
  public function FEliCuenta(){
    $idCuenta = $this->request->uri->getSegment(3);
    $data = array(
      "CuentasId"=> $this->MCuenta->BusCuentasId($idCuenta)
    );
    echo view("Cuenta/FEliminarCuenta", $data);
  }
  public function EliCuenta(){
    $idCuenta = $this->request->uri->getSegment(3);
    $activoCuenta = 0;
    $data = array(
      "activo_Cuenta" => $activoCuenta
    );
    $this->MCuenta->update($idCuenta,$data);
  }
  /* ============================
  PARA CREDITO EFECTIVO
  ============================== */
  public function creditoCliente()
  {
    $data = array(
      "creditoCli" => $this->MCredito->InfoCredito(),
    );

    echo view('header');
    echo view('credito/credito', $data);
    echo view('footer');
  }

    public function FNuevoCredito()
    {
      $data = array(
        "efectivo" => $this->MEfectivo->InfoEfectivo(),
      );
      echo view('credito/FNuevoCredito', $data);
    }
  
    public function RegCredito(){
      $nomCliente = $_POST["nomCliente"];
      $codCredito = $_POST["codCredito"];
      $descripcionCredito = $_POST["descripcionCredito"];
      $importe = $_POST["importe"];
      $fechaCredito = $_POST["fechaCredito"];
  
      $data = array(
        "id_cuenta_cli" => $nomCliente,
        "cod_credito" => $codCredito,
        "concepto_deposito" => $descripcionCredito,
        "importe_deposito" => $importe,
        "fecha_deposito" => $fechaCredito,
      );
      $this->MCredito->insert($data);
    }
  
    /*=========================
    FUNCIONC EDITAR LA Cuenta 
    ===========================*/
    public function FEditCredito(){
      $idCredito = $this->request->uri->getSegment(3);
      $data = array(
        "credito"=> $this->MCredito->BusCuenta2($idCredito),
        "cuenta"=> $this->MEfectivo->InfoEfectivo()
      );
      echo view("credito/FEditarCredito", $data);
    }
  
    public function EditCredito(){
      $idCredito = $this->request->uri->getSegment(3);
  
      $nomCliente = $_POST["nomCliente"];
      $codCredito = $_POST["codCredito"];
      $descripcionCredito = $_POST["descripcionCredito"];
      $importe = $_POST["importe"];
      $fechaCredito = $_POST["fechaCredito"];
  
      $data = array(
        "cod_credito" => $codCredito,
        "concepto_deposito" => $descripcionCredito,
        "importe_deposito" => $importe,
        "id_cuenta_cli" => $nomCliente,
        "fecha_deposito" => $fechaCredito
      );
      $this->MCredito->update($idCredito,$data);
    }
}
