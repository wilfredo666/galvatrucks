<?php

namespace App\Controllers;
use App\Models\MContratoCamion;

class CContratoCamion extends BaseController
{
    public function __construct()
    {
        $this->MContratoCamion= new MContratoCamion();
    }

    public function index(){
        $data= array(
            "contratoCamion"=> $this->MContratoCamion->findAll()
        );

        echo view('header');
        echo view('contratoCamion/contratoCamion',$data);
        echo view('footer');
    }
    public function FNuevoContratoCam(){
        echo view("contratoCamion/FNuevoContratoCam");
      }
    
      public function RegContratoCam(){
        $nomContrato=$_POST["nomContrato"];
        $placaCon=$_POST["placaCon"];
        $fechaIni=$_POST["fechaIni"];
        $fechaFin=$_POST["fechaFin"];
        $propietario=$_POST["propietario"];
        $obsCon=$_POST["obsCon"];

            
        $data= array( 
          "fecha_inicio_contrato"=> $fechaIni,
          "fecha_fin_contrato"=> $fechaFin,
          "num_contrato"=> $nomContrato,
          "placa"=> $placaCon,
          "propietario_camion"=> $propietario,
          "observacion"=> $obsCon          
        );
    
        $this->MContratoCamion->insert($data);
      } 

      public function MVerContratoCam(){
        $id= $this->request->uri->getSegment(3);
        
        $data=array(
          "contratoCam"=>$this->MContratoCamion->InfoContratoCam($id)
        );
        echo view("contratoCamion/MVerContratoCam", $data);
       }
}