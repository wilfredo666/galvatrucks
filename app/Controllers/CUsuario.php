<?php

namespace App\Controllers;
use App\Models\MUsuario;

class CUsuario extends BaseController
{
  public function __construct(){
    $this->MUsuario=new MUsuario();
  }
  
  public function index()
  {
    $data=array(
      "usuario"=>$this->MUsuario->findAll()
      );
    
    echo view('header');
    echo view('usuario/usuario', $data);
    echo view('footer');
  }
}