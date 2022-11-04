<?php

namespace App\Controllers;

use App\Models\MUsuario;
use App\Models\MServicio;
use App\Models\MSolicitudServicio;

class CUsuario extends BaseController
{
  public function __construct()
  {
    $this->MUsuario = new MUsuario();
    $this->MServicio = new MServicio();
    $this->MSolicitudServicio = new MSolicitudServicio();
  }

  public function index()
  {
    $data = array(
      "usuario" => $this->MUsuario->findAll()
    );

    echo view('header');
    echo view('usuario/usuario', $data);
    echo view('footer');
  }

  public function Panel()
  {
    $id_cliente = session("usuario.id_cliente");
        $data = array(
            /* "cliente" => $this->MCliente->InfoCliente($id), */
            "servicios" => $this->MServicio->InfoServClienteContador($id_cliente),
            "servicio" => $this->MServicio->contarServCli($id_cliente),
            "servicioPen" => $this->MSolicitudServicio->contarServPenCli($id_cliente,"pendiente"),
        );
    echo view('header');
    echo view('panel_principal',$data);
    echo view('footer');
  }
  /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVA USUARIO
    --------------------------------------*/
  public function FNuevoUsuario()
  {
    echo view("usuario/FNuevoUsuario");
  }
  public function RegUsuario()
  {
    $salt = 'eliseoamaru';
    $nomUsuario = $_POST["nomUsuario"];
    $loginUsuario = $_POST["loginUsuario"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $rolUsuario = $_POST["rolUsuario"];

    $data = array(
      "nombre_usuario" => $nomUsuario,
      "login_usuario" => $loginUsuario,
      "pass_usuario" => $password,
      "rol" => $rolUsuario
    );

    $this->MUsuario->insert($data);
  }

  /* --------------------------------------
      FUNCIONES PARA COMPROBAR EL USUARIO
    --------------------------------------*/
  public function ComprobarUsuario()
  {
    $usuario = trim($_POST["user"]);

    // $busqueda_usuario=array(
    //  "resBusUsuario"=>$this->MUsuario->comprobar_usuario($usuario)
    // );
    $busqueda_usuario = $this->MUsuario->comprobar_usuario($usuario);
    if ($usuario == $busqueda_usuario["login_usuario"]) {
      echo "<p class='text-danger' >Este usuario, ya está en uso...!!!</p>";
    } else {
      echo "<p class='text-success' >El nombre elegido, está disponible</p>";
    }
  }
  /* --------------------------------------
      FUNCIONES PARA VER USUARIO
    --------------------------------------*/
  public function MVerUsuario()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "usuario" => $this->MUsuario->InfoUsuario($id)
    );
    echo view("usuario/MVerUsuario", $data);
  }

  /* --------------------------------------
      FUNCIONES PARA EDITAR USUARIO
    --------------------------------------*/
  public function FEditUsuario()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "usuario" => $this->MUsuario->InfoUsuario($id)
    );

    echo view("usuario/FEditUsuario", $data);
  }
  public function EditUsuario()
  {
    $id = $this->request->uri->getSegment(3);

    $nomUsuario = $_POST["nomUsuario"];
    $rolUsuario = $_POST["rolUsuario"];
    $pass1 = $_POST["password"];
    $passActual = $_POST["passwordActual"];

    $password = "";

    if ($pass1 == $passActual) {
      $password = $pass1;
    } else {
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }

    $data = array(
      "nombre_usuario" => $nomUsuario,
      "pass_usuario" => $password,
      "rol" => $rolUsuario
    );

    $this->MUsuario->update($id, $data);
  }

  /* --------------------------------------
      FUNCIONES PARA ELIMINAR USUARIO
    --------------------------------------*/
  public  function FEliUsuario()
  {
    $id = $this->request->uri->getSegment(3);

    echo view("usuario/FEliUsuario", compact("id"));
  }
  public function EliUsuario()
  {
    $id = $this->request->uri->getSegment(3);
    $this->MUsuario->delete($id);
  }
}
