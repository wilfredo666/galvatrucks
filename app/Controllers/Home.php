<?php

namespace App\Controllers;

use App\Models\MUsuario;
use App\Models\MCliente;
use App\Models\MServicio;
use App\Models\MSolicitudServicio;

class Home extends BaseController
{
  public function index()
  {
    return view('login');
  }
  /*
  public function __construct()
  {
    $this->MUsuario = new MUsuario();
    $this->MServicio = new MServicio();
    $this->MSolicitudServicio = new MSolicitudServicio();
  }
*/

  public function acceso()
  {
    $MUsuario = new MUsuario();
    $MCliente = new MCliente();
    $MServicio = new MServicio();
    $MSolicitudServicio = new MSolicitudServicio();

    // Validamos los campos de usuario
    if (!$this->validate(
      [
        "usuario" => "required|min_length[3]",
        "password" => "required|min_length[3]"
      ]
    )) {
      //DESCOMENTAR
      return redirect()->to(base_url('/'))->with("errors", $this->validator->getErrors());
    }

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    //fin de la validación
    
    if(session("usuario.login_usuario")==$usuario){
      return redirect()->to(base_url('/'))->with("errors", ["credenciales" => "Acceso no autorizado, usuario en uso"]);
    }

    $data = array(
      "usuario" => $usuario
      /*solo quitar para pass no hasheados */
      // "password" => $password
    );


    $consulta = $MUsuario->acceso($data);
    /*para cuando nos da un nulo */
    if ($consulta == null || password_verify( $password,$consulta['pass_usuario'])==false) {
      return redirect()->to(base_url('/'))->with("errors", ["credenciales" => "Credenciales de acceso inválidas"]);
    }

    if (sizeof($consulta) > 0 && password_verify($password, $consulta['pass_usuario'])) {
      $id=$consulta["id_usuario"];

      $ClienteUsuario=$MCliente->InfoClienteUsuario($id);

      if($ClienteUsuario>0){
        $data=array(
          "usuario"=>$ClienteUsuario,
          "solPendiente"=>$MSolicitudServicio->ContarSolicitudes("pendiente")
        );
      }else{
        $data=array(
          "usuario"=>$consulta,
          "solPendiente"=>$MSolicitudServicio->ContarSolicitudes("pendiente"),
          "clientes"=>$MCliente->ContarCliente(),
          "servicio"=>$MServicio->ContarServicio(),
          /* "fotoCli"=>$MCliente->fotoCliente($id), */
        );
      }
      
      $session = session();
      $session->set($data);

      echo view('header');
      echo view('bienvenidos');
      echo view('footer');

    }
  }
  /*-----------------------------------
FUNCION SALIR
--------------------------------------*/
  public function salir()
  {
    /*Descomentar estas dos lineas para destruir sessiones */
    //DESCOMENTAR
    $session = session();
    $session->destroy();
    return redirect()->to(base_url('/'));
  }
}
