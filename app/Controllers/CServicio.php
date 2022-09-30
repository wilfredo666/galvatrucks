<?php

namespace App\Controllers;

use App\Models\MServicio;
use App\Models\MCliente;
use App\Models\MEmpresaMaritima;
use App\Models\MAsignacion;
use App\Models\MContratoCamion;
use App\Models\MRuta;

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
      'ruta' => $this->MRuta->findAll()
    );
    echo view("servicio/FNuevoServicio", $data);
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
    
    if(isset($_POST["conductorAsig"])){
      $conductorAsig = $_POST["conductorAsig"];
    }else{
      $conductorAsig=0;
    }
    if(isset($_POST["contratoCam"])){
      $contratoCam = $_POST["contratoCam"];
    }else{
      $contratoCam=0;
    }
    /*$conductorAsig = $_POST["conductorAsig"];
    $contratoCam = $_POST["contratoCam"];*/
    
    $rutas = $_POST["ruta"];
    $costoServ = $_POST["costoServ"];

    $docImportacion = $_FILES["docImportacion"];

    $ruta = "assest/documentos/servicios/";
    $doc = $docImportacion["name"];
    $tmpDoc = $docImportacion["tmp_name"];
    move_uploaded_file($tmpDoc, $ruta . $doc);

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
      "documento" => $doc,
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
      "servicio2" => $this->MServicio->InfoServicio2($id)
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
      'asignacion' => $this->MAsignacion->findAll(),
      'contratoCam' => $this->MContratoCamion->findAll(),
      'ruta' => $this->MRuta->findAll()
    );
    echo view("servicio/FEditServicio", $data);
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
    $conductorAsig = $_POST["conductorAsig"];
    $contratoCam = $_POST["contratoCam"];
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
  public function seguimientoContenedor(){


    echo view('header');
    echo view("servicio/seguimientoContenedor");
    echo view('footer');
    
  }
}

