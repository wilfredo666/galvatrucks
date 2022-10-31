<?php

namespace App\Controllers;

use App\Models\MSolicitudServicio;
use App\Models\MEmpresaMaritima;
use App\Models\MCliente;

class CSolicitudServicio extends BaseController
{
  public function __construct()
  {
    $this->MSolicitudServicio = new MSolicitudServicio();
    $this->MEmpresaMaritima = new MEmpresaMaritima();
    $this->MCliente = new MCliente();
  }

  public function index()
  {
    $id_cliente=session("id_cliente");
    $data = array(
      "solicitud" => $this->MSolicitudServicio->lista_consultas($id_cliente)
    );
    echo view('header');
    echo view('solicitudServicio/solicitudServ', $data);
    echo view('footer');

    /* var_dump($id_cliente); */
  }
  /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVA SOLICITUD
    --------------------------------------*/
  public function FNuevoServicio()
  {
    $id_usuario = session("id_usuario");

    $data = array(
      "empMaritima" => $this->MEmpresaMaritima->findAll(),
      "cliente2" => $this->MCliente->InfoCliId($id_usuario)
    );
    
    echo view("solicitudServicio/FNuevoSolicitud", $data);
  }

  public function RegSolicitud()
  {
    $idCli = $_POST["idCliente"];

    $numBill = $_POST["numBill"];
    $naviera = $_POST["naviera"];
    $fechaSolicitud = $_POST["fechaSolicitud"];

    $bill = $_FILES["docBill"];

    $ruta = "assest/documentos/solicitudes/";
    $doc1 = $bill["name"];
    $tmpDoc = $bill["tmp_name"];
    move_uploaded_file($tmpDoc, $ruta . $doc1);

    $facComercial = $_FILES["docFactura"];
    $ruta = "assest/documentos/solicitudes/";
    $doc2 = $facComercial["name"];
    $tmpDoc = $facComercial["tmp_name"];
    move_uploaded_file($tmpDoc, $ruta . $doc2);

    $listaEmpaque = $_FILES["docEmpaque"];
    $ruta = "assest/documentos/solicitudes/";
    $doc3 = $listaEmpaque["name"];
    $tmpDoc = $listaEmpaque["tmp_name"];
    move_uploaded_file($tmpDoc, $ruta . $doc3);

    $docOtros = $_FILES["docOtros"];
    $ruta = "assest/documentos/solicitudes/";
    $doc4 = $docOtros["name"];
    $tmpDoc = $docOtros["tmp_name"];
    move_uploaded_file($tmpDoc, $ruta . $doc4);

    $data = array(
      "id_emp_maritima" => $naviera,
      "numero_bill" => $numBill,
      "fecha_solicitud" => $fechaSolicitud,
      "doc_bill" => $doc1,
      "doc_factura" => $doc2,
      "doc_lista_empaque" => $doc3,
      "doc_otros" => $doc4,
      "id_cliente" =>  $idCli
    );
    /*         var_dump($data); */
    $this->MSolicitudServicio->insert($data);
  }

  public function FEditSolicitud()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "solicitudServ" => $this->MSolicitudServicio->InfoSolicitud($id),
      "empMaritima" => $this->MEmpresaMaritima->findAll()
    );
    /* var_dump($data); */
    echo view("solicitudServicio/FEditSolicitud", $data);
  }

  public function EditSolicitud()
  {
    $id = $this->request->uri->getSegment(3);

    $numBill = $_POST["numBill"];
    $naviera = $_POST["naviera"];
    $fechaSolicitud = $_POST["fechaSolicitud"];

    $bill = $_FILES["docBill"];

    if ($bill["name"] == "") {
      $doc1 = $_POST["docBillActual"];
    } else {
      $ruta = "assest/documentos/solicitudes/";
      $doc1 = $bill["name"];
      $tmpDoc = $bill["tmp_name"];
      move_uploaded_file($tmpDoc, $ruta . $doc1);
    }

    $facComercial = $_FILES["docFactura"];

    if ($facComercial["name"] == "") {
      $doc2 = $_POST["docFacturaActual"];
    } else {
      $ruta = "assest/documentos/solicitudes/";
      $doc2 = $facComercial["name"];
      $tmpDoc = $facComercial["tmp_name"];
      move_uploaded_file($tmpDoc, $ruta . $doc2);
    }

    $listaEmpaque = $_FILES["docEmpaque"];

    if ($listaEmpaque["name"] == "") {
      $doc3 = $_POST["docEmpaqueActual"];
    } else {
      $ruta = "assest/documentos/solicitudes/";
      $doc3 = $listaEmpaque["name"];
      $tmpDoc = $listaEmpaque["tmp_name"];
      move_uploaded_file($tmpDoc, $ruta . $doc3);
    }

    $docOtros = $_FILES["docOtros"];

    if ($docOtros["name"] == "") {
      $doc4 = $_POST["docOtrosActual"];
    } else {
      $ruta = "assest/documentos/solicitudes/";
      $doc4 = $docOtros["name"];
      $tmpDoc = $docOtros["tmp_name"];
      move_uploaded_file($tmpDoc, $ruta . $doc4);
    }

    $observacion = $_POST["observaciones"];

    $data = array(
      "id_emp_maritima" => $naviera,
      "numero_bill" => $numBill,
      "fecha_solicitud" => $fechaSolicitud,
      "doc_bill" => $doc1,
      "doc_factura" => $doc2,
      "doc_lista_empaque" => $doc3,
      "doc_otros" => $doc4,
      "observaciones" => $observacion,
    );
    /*         var_dump($data); */
    $this->MSolicitudServicio->update($id, $data);
  }

  public function FEliSolicitud()
  {
    $id = $this->request->uri->getSegment(3);
    echo view("solicitudServicio/FEliSolicitud", compact("id"));
  }
  public function EliSolicitud()
  {
    $id = $this->request->uri->getSegment(3);
    $this->MSolicitudServicio->delete($id);
  }

  public function ContarSolicitud(){
    $data = array(
      "solicitudServ" => $this->MSolicitudServicio->ContarSolicitudes(),
    );
    /* var_dump($data); */
    echo view('header', $data);
    /* echo view('panel_principal', $data); 
    echo view('footer'); */
  }
}
