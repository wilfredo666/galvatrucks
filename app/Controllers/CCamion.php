<?php

namespace App\Controllers;
use App\Models\MCamion;

class CCamion extends BaseController
{
    public function __construct()
    {
        $this->MCamion= new MCamion();
    }

    public function index(){
        $data = array(
            "camion"=>$this->MCamion->findAll()
        );

        echo view('header');
        echo view('camion/camion',$data);
        echo view('footer');
    }

    public function FNuevoCamion(){
        echo view("camion/FNuevoCamion");
      }
    
      public function RegCamion(){
        $placa=$_POST["placa"];
        $clase=$_POST["clase"];
        $capacidad=$_POST["capacidad"];
        $chasis=$_POST["chasis"];
        $ejes=$_POST["ejes"];
        $marca=$_POST["marca"];
        $color=$_POST["colorCamion"];
            
        $data= array( 
          "placa"=> $placa,
          "clase"=> $clase,
          "ejes"=> $ejes,
          "capacidad"=> $capacidad,
          "chasis"=> $chasis,
          "marca"=> $marca,
          "color"=> $color
          
        );
    
        $this->MCamion->insert($data);
      }  

      public function MVerCamion(){
        $id= $this->request->uri->getSegment(3);
        
        $data=array(
          "camion"=>$this->MCamion->InfoCamion($id)
        );
        echo view("camion/MVerCamion", $data);
       }
}