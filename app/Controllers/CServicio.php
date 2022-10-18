<?php

namespace App\Controllers;

use App\Models\MServicio;
use App\Models\MCliente;
use App\Models\MEmpresaMaritima;
use App\Models\MAsignacion;
use App\Models\MContratoCamion;
use App\Models\MRuta;
use App\Models\MSolicitudServicio;

class CServicio extends BaseController
{
  public function __construct()
  {
    $this->MServicio = new MServicio();
    $this->MCliente = new MCliente();
    $this->MEmpresaMaritima = new MEmpresaMaritima();
    $this->MAsignacion = new MAsignacion();
    $this->MContratoCamion = new MContratoCamion();
    $this->MRuta = new MRuta();
    $this->MSolicitudServicio = new MSolicitudServicio();
  }

  public function index()
  {

    $data = array(
      "servicio" => $this->MServicio->lista_consultas2()
    );

    echo view('header');
    echo view('servicio/servicio', $data);
    echo view('footer');
  }
  /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO SERVICIOS
    --------------------------------------*/
  public function FNuevoServicio()
  {

    $data = array(
      'cliente' => $this->MCliente->findAll(),
      'empMaritima' => $this->MEmpresaMaritima->findAll(),
      'asignacion' => $this->MAsignacion->ListaAsignaciones(),
      'contratoCam' => $this->MContratoCamion->findAll(),
      'ruta' => $this->MRuta->findAll(),
      'solicitudServ' => $this->MSolicitudServicio->SolicitudesPendientes()
    );
    echo view("servicio/FNuevoServicio", $data);
    /* var_dump($data); */
  }

  public function RegServicio()
  {
    $codServicio = $_POST["codServicio"];
    $servCliente = $_POST["servCliente"];
    $servNaviera = $_POST["servNaviera"];
    $servIni = $_POST["servIni"];
    $nroBill = $_POST["nroBill"];
    $nroCont = $_POST["nroCont"];
    $tamCont = $_POST["tamCont"];
    $pesoMerc = $_POST["pesoMerc"];
    $detalleMerc = $_POST["detalleMerc"];
    $origenMerc = $_POST["origenMerc"];
    $destMerc = $_POST["destMerc"];
    $fechaArribo = $_POST["fechaArribo"];
    $fechaAlmacen = $_POST["fechaAlmacen"];

    if (isset($_POST["conductorAsig"])) {
      $conductorAsig = $_POST["conductorAsig"];
    } else {
      $conductorAsig = 0;
    }
    if (isset($_POST["contratoCam"])) {
      $contratoCam = $_POST["contratoCam"];
    } else {
      $contratoCam = 0;
    }
    /*$conductorAsig = $_POST["conductorAsig"];
    $contratoCam = $_POST["contratoCam"];*/

    $rutas = $_POST["ruta"];
    $idSoli = $_POST["idSolicitud"];
    $costoServ = $_POST["costoServ"];


    /*   $docImportacion = $_FILES["docImportacion"];
    $ruta = "assest/documentos/servicios/";
    $doc = $docImportacion["name"];
    $tmpDoc = $docImportacion["tmp_name"];
    move_uploaded_file($tmpDoc, $ruta . $doc); */

    $observacion = $_POST["observacion"];

    $data = array(
      "cod_servicio" => $codServicio,
      "id_cliente" => $servCliente,
      "id_emp_maritima" => $servNaviera,
      "fecha_inicio_servicio" => $servIni,
      "num_bill" => $nroBill,
      "nro_contenedor" => $nroCont,
      "medida_contenedor" => $tamCont,
      "peso_mercaderia" => $pesoMerc,
      "detalle_mercaderia" => $detalleMerc,
      "origen_mercaderia" => $origenMerc,
      "destino_mercaderia" => $destMerc,
      "fecha_arribo" => $fechaArribo,
      "fecha_almacen" => $fechaAlmacen,
      "id_asignacion" => $conductorAsig,
      "id_contrato_camion" => $contratoCam,
      "id_ruta" => $rutas,
      "costo_servicio" => $costoServ,
      "id_solicitud" => $idSoli,
      /* "documento" => $doc, */
      "observaciones" => $observacion
    );
    /* var_dump($data); */
    $this->MServicio->insert($data);
  }

  /* --------------------------------------
      FUNCIONES PARA VER SERVICIO
    --------------------------------------*/
  public function MVerServicio()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "servicio" => $this->MServicio->InfoServicio($id),
      "servicio2" => $this->MServicio->InfoServicio2($id),
      "servicio3" => $this->MServicio->InfoServicio3($id)
    );
    echo view("servicio/MVerServicio", $data);
  }

  /* --------------------------------------
      FUNCIONES PARA EDITAR SERVICIO    
    --------------------------------------*/
  public function FEditServicio()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "servicio" => $this->MServicio->InfoServicio($id),

      'cliente' => $this->MCliente->findAll(),
      'empMaritima' => $this->MEmpresaMaritima->findAll(),
      'asignacion' => $this->MAsignacion->ListaAsignaciones(),
      'contratoCam' => $this->MContratoCamion->findAll(),
      'ruta' => $this->MRuta->findAll()
    );
    echo view("servicio/FEditServicio", $data);
    /* var_dump($data); */
  }

  public function EditServicio()
  {
    $id = $this->request->uri->getSegment(3);

    $codServicio = $_POST["codServicio"];
    $servCliente = $_POST["servCliente"];
    $servNaviera = $_POST["servNaviera"];
    $servIni = $_POST["servIni"];
    $nroBill = $_POST["nroBill"];
    $nroCont = $_POST["nroCont"];
    $tamañoCont = $_POST["tamañoCont"];
    $pesoMerc = $_POST["pesoMerc"];
    $detalleMerc = $_POST["detalleMerc"];
    $origenMerc = $_POST["origenMerc"];
    $destMerc = $_POST["destMerc"];
    $fechaArribo = $_POST["fechaArribo"];
    $fechaAlmacen = $_POST["fechaAlmacen"];


    if (isset($_POST["conductorAsig"])) {
      $conductorAsig = $_POST["conductorAsig"];
    } else {
      $conductorAsig = 0;
    }
    if (isset($_POST["contratoCam"])) {
      $contratoCam = $_POST["contratoCam"];
    } else {
      $contratoCam = 0;
    }

    $rutas = $_POST["ruta"];
    $costoServ = $_POST["costoServ"];


    $docImportacion = $_FILES["docImportacion"];

    if ($docImportacion["name"] == "") {
      $doc = $_POST["docImportacionActual"];
    } else {
      $ruta = "assest/documentos/servicios/";
      $doc = $docImportacion["name"];
      $tmpDoc = $docImportacion["tmp_name"];
      move_uploaded_file($tmpDoc, $ruta . $doc);
    }

    $observacion = $_POST["observacion"];
    $estado = $_POST["estado"];

    $data = array(
      "cod_servicio" => $codServicio,
      "id_cliente" => $servCliente,
      "id_emp_maritima" => $servNaviera,
      "fecha_inicio_servicio" => $servIni,
      "num_bill" => $nroBill,
      "nro_contenedor" => $nroCont,
      "medida_contenedor" => $tamañoCont,
      "peso_mercaderia" => $pesoMerc,
      "detalle_mercaderia" => $detalleMerc,
      "origen_mercaderia" => $origenMerc,
      "destino_mercaderia" => $destMerc,
      "fecha_arribo" => $fechaArribo,
      "fecha_almacen" => $fechaAlmacen,
      "id_asignacion" => $conductorAsig,
      "id_contrato_camion" => $contratoCam,
      "id_ruta" => $rutas,
      "costo_servicio" => $costoServ,
      "documento" => $doc,
      "observaciones" => $observacion,
      "activo_serv" => $estado

    );

    /* var_dump($data); */
    $this->MServicio->update($id, $data);
  }
  /* --------------------------------------
      FUNCIONES PARA ELIMINAR SERVICIO
    --------------------------------------*/
  public function FEliServicio()
  {
    $id = $this->request->uri->getSegment(3);
    echo view("servicio/FEliServicio", compact("id"));
  }

  public function EliServicio()
  {
    $id = $this->request->uri->getSegment(3);
    $this->MServicio->delete($id);
  }
  /* --------------------------------------
      FUNCIONES PARA  SEGUIMIENTO DE CONTENEDORES
    --------------------------------------*/
  public function seguimientoContenedor()
  {
    echo view('header');
    echo view("servicio/seguimientoContenedor");
    echo view('footer');
  }
  /* buscar contenendor */
  public function FBuscarMovimiento()
  {
    $contenedor = $this->request->uri->getSegment(3);
    $data = array(
      "busContenedor" => $this->MServicio->BusContendor($contenedor),
    );
    echo view("servicio/FLlenarContenedor", $data);
    /* var_dump($data);  */
  }
  /* agregar  nnuevo movimiento */
  public function FNuevoMovimiento()
  {
    echo view("servicio/FNuevoMovimiento");
  }
}
