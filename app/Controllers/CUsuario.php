<?php

namespace App\Controllers;

use App\Models\MUsuario;

class CUsuario extends BaseController
{
  public function __construct()
  {
    $this->MUsuario = new MUsuario();
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

  public function FNuevoUsuario()
  {
    echo view("usuario/FNuevoUsuario");
  }

  public function RegUsuario()
  {
    $nomUsuario = $_POST["nomUsuario"];
    $loginUsuario = $_POST["loginUsuario"];
    $password = $_POST["password"];
    $rolUsuario = $_POST["rolUsuario"];

    $data = array(
      "nombre_usuario" => $nomUsuario,
      "login_usuario" => $loginUsuario,
      "pass_usuario" => $password,
      "rol" => $rolUsuario
    );

    $this->MUsuario->insert($data);
  }

  public function MVerUsuario()
  {
    $id = $this->request->uri->getSegment(3);

    $data = array(
      "usuario" => $this->MUsuario->InfoUsuario($id)
    );
    echo view("usuario/MVerUsuario", $data);
  }

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
    $password = $_POST["password"];
    $rolUsuario = $_POST["rolUsuario"];

    $data = array(
      "nombre_usuario" => $nomUsuario,
      "pass_usuario" => $password,
      "rol" => $rolUsuario
    );

    $this->MUsuario->update($id, $data);
  }
}
