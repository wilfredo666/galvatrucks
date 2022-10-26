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
  public function NuevoPago()
  {
    $data = array(
      "datosServ" => $this->MServicio->findAll()
    );

    echo view('header');
    echo view('pago/nuevoPago', $data);
    echo view('footer');

    /* var_dump($data); */
  }
  public function buscarBl()
  {
    /* $campo = $_POST["nroBill"];
    var_dump($campo); */
  }
  /* para registra pago con botonon añadir pago */
  public function CAñadirPago()
  {
    $idServicio = $this->request->uri->getSegment(3);

    $data = array(
      "datosServicio" => $this->MServicio->ServicioBill($idServicio)
    );
    echo view('pago/FnuevoPago', $data);
    /*     var_dump($data); */
  }
  /* para registrar el Pago */
  public function RegPago(){
    $fechaPago = $_POST["fechaPago"];
    $conceptoPago = $_POST["conceptoPago"];
    $montoPago = $_POST["montoPago"];
    $tipoMoneda = $_POST["tipoMoneda"];
    $numBill = $_POST["numBill"];
    $idServicio = $_POST["idServicio"];

    $data = array(
      "numero_bill" => $numBill,
      "concepto" => $conceptoPago,
      "monto" => $montoPago,
      "tipo_moneda" => $tipoMoneda,
      "fecha_pago" => $fechaPago,
      "id_servicio" => $idServicio
    );
    $this->MPago->insert($data);
  }

  public function FBuscarBill()
  {
    $nroBill = $this->request->uri->getSegment(3);
    $nroBillMayus = strtoupper($nroBill);
    $data = array(
      "busBill" => $this->MServicio->BusNroBill($nroBillMayus),
      "pagosBill"=> $this->MPago->BusPagosBill($nroBillMayus)
    );
    echo view("pago/llenarDatosPago", $data);
    /* var_dump($data); */
  }

  /*FUNCIONC EDITAR EL PAGO */
  public function FEditPago(){
    $idPago = $this->request->uri->getSegment(3);

    $data = array(
      "pagosId"=> $this->MPago->BusPagosId($idPago)
    );
    echo view("pago/FEditarPago", $data);
  }
  public function EditPago(){
    $idPago = $this->request->uri->getSegment(3);

    $fechaPago = $_POST["fechaPago"];
    $conceptoPago = $_POST["conceptoPago"];
    $montoPago = $_POST["montoPago"];
    $tipoMoneda = $_POST["tipoMoneda"];

    $data = array(
      "concepto" => $conceptoPago,
      "monto" => $montoPago,
      "tipo_moneda" => $tipoMoneda,
      "fecha_pago" => $fechaPago
    );
    $this->MPago->update($idPago,$data);
  }
  /*PARA ELIMINAR PAGOS */
  public function FEliPago(){
    $idPago = $this->request->uri->getSegment(3);
    $data = array(
      "pagosId"=> $this->MPago->BusPagosId($idPago)
    );
    echo view("pago/FEliminarPago", $data);
  }
  public function EliPago(){
    $idPago = $this->request->uri->getSegment(3);
    $activoPago = 0;
    $data = array(
      "activo_pago" => $activoPago
    );
    $this->MPago->update($idPago,$data);
  }
  public function pruebaImpresion(){

    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml(view('pruebaImp'));
    $dompdf->setPaper('A4','landscape');
    $dompdf->render();
    $dompdf->stream();
  }
}
