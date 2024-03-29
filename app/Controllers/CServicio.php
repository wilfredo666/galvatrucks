<?php

namespace App\Controllers;

use App\Models\MServicio;
use App\Models\MCliente;
use App\Models\MEmpresaMaritima;
use App\Models\MAsignacion;
use App\Models\MContratoCamion;
use App\Models\MRuta;
use App\Models\MSolicitudServicio;
use App\Models\MMovimientosContenedor;
use App\Models\MPago;

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
    $this->MMovimientosContenedor = new MMovimientosContenedor();
    $this->MPago = new MPago();
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

    $data2 = array(
      "activo_soli_serv" => 1
    );

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
    $this->MSolicitudServicio->update($idSoli, $data2);
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
    /* var_dump($data); */
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
    $tamanoCont = $_POST["tamañoCont"];
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
      "medida_contenedor" => $tamanoCont,
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
    /* $this->MServicio->delete($id); */

    $estado_servicio = 0;
    $data = array(
      "estado_servicio" => $estado_servicio
    );
    $this->MServicio->update($id,$data);
  }
  /* --------------------------------------
      FUNCIONES PARA  SEGUIMIENTO DE CONTENEDORES
    --------------------------------------*/
  public function seguimientoContenedor()
  {

    $data = array(
      "buscarContenedor" => $this->MServicio->BuscarContendor(),
    );
    echo view('header');
    echo view("servicio/seguimientoContenedor", $data);
    echo view('footer');
    /* var_dump($data); */
  }
  /* buscar contenendor */
  public function FBuscarMovimiento()
  {
    $contenedor = $this->request->uri->getSegment(3);
    $data = array(
      "busContenedor" => $this->MServicio->BusContendor($contenedor),
      "movContenedor" => $this->MMovimientosContenedor->ListaMovContenedor($contenedor),
      "ultimoMovimiento" => $this->MMovimientosContenedor->UltimoMovimiento($contenedor)
    );
    echo view("servicio/FLlenarContenedor", $data);
    /* var_dump($data); */
  }
  /* agregar  nnuevo movimiento */
  public function FNuevoMovimiento()
  {
    $id_servicio = $this->request->uri->getSegment(3);
    //consultar datos a la tabla servicio
    $data = array(
      "servicioContenedor" => $this->MServicio->ServContenedor($id_servicio)
    );
    /* var_dump($data); */
    echo view("servicio/FNuevoMovimiento", $data);
  }

  public function RegMovimiento()
  {
    $idServicio = $_POST["idServicio"];
    $numContenedor = $_POST["numeroCont"];
    $fechaMovimiento = $_POST["fechaHora"];
    $ubicacionCont = $_POST["ubicacionCont"];
    $descripcionCont = $_POST["descripcionCont"];
    $estadoCont = $_POST["estadoCont"];

    $data = array(
      "id_servicio" => $idServicio,
      "fecha_mov" => $fechaMovimiento,
      "ubicacion_mov" => $ubicacionCont,
      "descripcion_mov" => $descripcionCont,
      "estado_mov" => $estadoCont,
      "num_contenedor" => $numContenedor
    );
    $this->MMovimientosContenedor->insert($data);
  }

  public function FEditMovimiento()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "movimiento" => $this->MMovimientosContenedor->InfoMovimiento($id)
    );
    /* var_dump($data); */
    echo view("servicio/FEditMovimiento", $data);
  }
  public function EditMovimiento()
  {
    $id = $this->request->uri->getSegment(3);

    /* $idServicio = $_POST["idServicio"];
    $numContenedor = $_POST["numeroCont"]; */
    $fechaMovimiento = $_POST["fechaHora"];
    $ubicacionCont = $_POST["ubicacionCont"];
    $descripcionCont = $_POST["descripcionCont"];
    $estadoCont = $_POST["estadoCont"];

    $data = array(
      "fecha_mov" => $fechaMovimiento,
      "ubicacion_mov" => $ubicacionCont,
      "descripcion_mov" => $descripcionCont,
      "estado_mov" => $estadoCont
    );

    $this->MMovimientosContenedor->update($id, $data);
  }

  public function FEliMovimiento()
  {
    $id = $this->request->uri->getSegment(3);
    echo view("servicio/FEliMovimiento", compact("id"));
  }
  public function EliMovimiento()
  {
    $id = $this->request->uri->getSegment(3);
    $this->MMovimientosContenedor->delete($id);
  }

  public function notaDebito()
  {
    $data = array(
      "datosServ" => $this->MServicio->findAll()
    );
    echo view('header');
    echo view('notaDebito/FNotaDebito',$data);
    echo view('footer');
  }
  public function FBuscarBL()
  {
    $nroBill = $this->request->uri->getSegment(3);
    $nroBillMayus = strtoupper($nroBill);
    $data = array(
      "busBill" => $this->MServicio->BusNroBill($nroBillMayus),
      "pagosBill" => $this->MPago->BusPagosBill($nroBillMayus)
    );
    echo view("notaDebito/llenarDatosReporte", $data);
    //var_dump($data); 
  }
  public function GeneraNotaDebito()
  {
    $id = $_GET["id"];
    $data = array(
      "busBill" => $this->MServicio->BusNroBillId($id),
      "pagosBill" => $this->MPago->BusPagosBillId($id),
      "sumaPagos" => $this->MPago->sumarPagos($id),
    );

    /* var_dump($data); */
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml(view('notaDebito/generaNotaDebito', $data));
    $dompdf->setPaper('Latter', 'portrait');
    $dompdf->render();
    $dompdf->stream("NotaDebito-" . $id . ".pdf");
  }
  /* public function ImprimirReporte()
  {
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml(view('notaDebito/generaNotaDebito'));
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();
  } */
  /* ===========================================================
    ---------------SERVICIOS DEL CLIENTE EN PANEL CLIENTE ====
==============================================================*/
  public function servCliente()
  {
    $id_cliente = session("usuario.id_cliente");

    $data = array(
      "servicio" => $this->MServicio->lista_servPorCliente($id_cliente)
    );

    echo view('header');
    echo view('servicio/servicioCliente', $data);
    echo view('footer');
    /* var_dump($data); */
  }
  /* PARA BUCAR CONT SOLO DE CLIENTE */
  public function seguimientoContCli()
  {
    $id_cliente = session("usuario.id_cliente");
    $data = array(
      "buscarContenedor" => $this->MServicio->BuscarContendorCliente($id_cliente),
    );
    echo view('header');
    echo view("servicio/seguimientoContCli",$data);
    echo view('footer');
  }
  public function FBuscarMovimientoCli()
  {

    $id_cliente = session("usuario.id_cliente");
    $contenedor = $this->request->uri->getSegment(3);

    $data = array(
      "busContenedor" => $this->MServicio->BusContendorCli($contenedor, $id_cliente),
      "movContenedor" => $this->MMovimientosContenedor->ListaMovContenedor($contenedor),
      "ultimoMovimiento" => $this->MMovimientosContenedor->UltimoMovimiento($contenedor)
    );
    echo view("servicio/FLlenarContenedorCli", $data);

    /* var_dump($data); */
  }
}
