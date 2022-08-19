<?php

namespace App\Controllers;

use App\Models\MAsignacion;
use App\Models\MConductor;
use App\Models\MCamion;


class CAsignacion extends BaseController
{
    public function __construct()
    {
        $this->MAsignacion = new MAsignacion();
        $this->MConductor = new MConductor();
        $this->MCamion = new MCamion();
    }

    public function index()
    {
       /*  $data = array(
            "asignacion" => $this->MAsignacion->findAll()
        ); */
        $data = array(
            "asignacion" => $this->MAsignacion->lista_consultas()
        );

        echo view('header');
        echo view('asignacion/asignacion', $data);
        echo view('footer');
    }

    /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO asignacion
    --------------------------------------*/
    public function FNuevoAsignacion()
    {
        $data=array(
            'lista_conductor'=>$this->MConductor->findAll(),
            'lista_camion'=>$this->MCamion->findAll()
        );

        echo view("asignacion/FNuevoAsignacion",$data);
    }

    public function RegAsignacion()
    {
        $asignacion = $_POST["asignacion"];
        $fechaIni = $_POST["fechaIni"];
        $fechaFin = $_POST["fechaFin"];
        $conductorAsig = $_POST["conductorAsig"];
        $placaAsig = $_POST["placaAsig"];

        $data = array(
            "nombre_asig" => $asignacion,
            "fecha_asig" => $fechaIni,
            "fecha_baja_asig" => $fechaFin,
            "id_camion" => $placaAsig,
            "id_conductor" => $conductorAsig
        );

        $this->MAsignacion->insert($data);
    }
    /* --------------------------------------
      FUNCIONES PARA VER Asignacion
    --------------------------------------*/
    public function MVerAsignacion()
    {
        $id = $this->request->uri->getSegment(3);

        $data = array(
            "asignacion" => $this->MAsignacion->InfoAsignacion($id),
            'lista_conductor'=>$this->MConductor->findAll(),
            'lista_camion'=>$this->MCamion->findAll()
        );
        echo view("asignacion/MVerAsignacion", $data);
    }

    /* --------------------------------------
      FUNCIONES PARA EDITAR asignacion
    --------------------------------------*/
    public function FEditAsignacion()
    {
        $id = $this->request->uri->getSegment(3);

        $data = array(
            "asignacion" => $this->MAsignacion->InfoAsignacion($id)
        );
        echo view("asignacion/FEditAsignacion", $data);
    }

    public function EditAsignacion()
    {
        $id = $this->request->uri->getSegment(3);

        $placa = $_POST["placa"];
        $clase = $_POST["clase"];
        $capacidad = $_POST["capacidad"];
        $chasis = $_POST["chasis"];
        $ejes = $_POST["ejes"];
        $marca = $_POST["marca"];
        $color = $_POST["colorCamion"];

        $data = array(
            "placa" => $placa,
            "clase" => $clase,
            "ejes" => $ejes,
            "capacidad" => $capacidad,
            "chasis" => $chasis,
            "marca" => $marca,
            "color" => $color

        );

        $this->MAsignacion->update($id, $data);
    }
    /* --------------------------------------
      FUNCIONES PARA ELIMINAR Asignacion
    --------------------------------------*/
    public function FEliAsignacion()
    {
        $id = $this->request->uri->getSegment(3);
        echo view("asignacion/FEliAsignacion", compact("id"));
    }

    public function EliAsignacion()
    {
        $id = $this->request->uri->getSegment(3);
        $this->MAsignacion->delete($id);
    }
}
