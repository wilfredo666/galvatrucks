<?php

namespace App\Controllers;
use App\Models\MConductor;

class CConductor extends BaseController
{
  public function __construct()
  {
    $this->MConductor= new MConductor();
  }

  public function index(){
    $data= array(
      "conductor"=>$this->MConductor->findAll()
    );

    echo view('header');
    echo view('conductor/conductor',$data);
    echo view('footer');
  }

  public function FNuevoConductor(){
    echo view("conductor/FNuevoConductor");
  }

  public function RegConductor(){
    $nomConductor=$_POST["nomConductor"];
    $apConductor=$_POST["apConductor"];
    $ciCond=$_POST["ciCond"];
    $categoria=$_POST["categoria"];
    $fechaNac=$_POST["fechaNac"];
    $estadoCond=$_POST["estadoCond"];
    $dirCond=$_POST["dirCond"];
    $correoCond=$_POST["correoCond"];
    $contactoCond=$_POST["contactoCond"];
    $ctaCond=$_POST["ctaCond"];
    $cta2Cond=$_POST["cta2Cond"];
    $personaContacto=$_POST["personaContacto"];
    $fotoCond=$_FILES["fotoCond"];
    
    $ruta="assest/img/conductor/";
    $foto=$fotoCond["name"];
    $tmpFoto=$fotoCond["tmp_name"];
    move_uploaded_file($tmpFoto,$ruta.$foto);


    $data= array( 
      "nombre_cond"=> $nomConductor,
      "apellido_cond"=> $apConductor,
      "ci_cond"=> $ciCond,
      "tipo_licencia"=> $categoria,
      "fecha_nac_cond"=> $fechaNac,
      "direccion_cond"=> $dirCond,
      "email_cond"=> $correoCond,
      "contacto_cond"=> $contactoCond,
      "persona_contacto_cond"=> $personaContacto,
      "estado_civil_cond"=> $estadoCond,
      "num_cuenta_cond"=> $ctaCond,
      "num_cuenta2_cond"=> $cta2Cond,
      "imagen_cond"=> $foto
    );

    $this->MConductor->insert($data);
  }

}