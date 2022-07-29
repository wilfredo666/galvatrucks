<?php

namespace App\Controllers;
use App\Models\MUsuario;

class Home extends BaseController
{
  public function index()
  {
    return view('login');
  }
  
  public function acceso(){
    $MUsuario=new MUsuario();
    
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    
    $data=array(
    "usuario"=>$usuario,
    "password"=>$password
    );
    
    $consulta=$MUsuario->acceso($data);
    
    
    if($consulta==null){
      echo "error no encontrado";
    }else{
      return
    }
    
  }
}
