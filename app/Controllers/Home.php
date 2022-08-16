<?php

namespace App\Controllers;

use App\Models\MUsuario;

class Home extends BaseController
{
  public function index()
  {
    return view('login');
  }

  public function acceso()
  {
    $MUsuario = new MUsuario();
    
    // Validamos los campos de usuario
    if (!$this->validate(
      [
        "usuario" => "required|min_length[3]",
        "password" => "required|min_length[3]"
      ]
    )) {
      //DESCOMENTAR
      // return redirect()->to(base_url('/'))->with("errors", $this->validator->getErrors());
    }

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    //fin de la validación
    $data = array(
      "usuario" => $usuario
      /*solo quitar para pass no hasheados */
      // "password" => $password
    );


    $consulta = $MUsuario->acceso($data);
    /*para cuando nos da un nulo */
    //DESCOMENTAR 3 LINEAS
    // if ($consulta == null || password_verify( $password,$consulta['pass_usuario'])==false) {
    //   return redirect()->to(base_url('/'))->with("errors", ["credenciales" => "Credenciales de acceso inválidas"]);
    // }

    if (sizeof($consulta) > 0 && password_verify($password, $consulta['pass_usuario'])) {
      //DESCOMENTAR
      // $session = session();
      // $session->set($data);

      echo view('header');
      echo view('panel_principal');
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
    // $session = session();
    // $session->destroy();
    return redirect()->to(base_url('/'));
  }
}
