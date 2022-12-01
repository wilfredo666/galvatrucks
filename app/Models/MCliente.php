<?php

namespace App\Models;

use CodeIgniter\Model;

class MCliente extends Model
{
  protected $table      = 'cliente';
  protected $primaryKey = 'id_cliente';

  protected $returnType     = 'array';

  protected $allowedFields = ['nombre_cli', 'apellido_cli', 'ci_nit_cli', 'fecha_nac_cli', 'estado_civil_cli', 'num_cuenta_cli', 'num_cuenta2_cli', 'razon_social_cli', 'direccion_cli', 'email_cli', 'contacto_cli', 'persona_contacto_cli', 'tipo_cli', 'imagen_cli', 'id_usuario', 'activo_cli', 'estado_cliente'];

  public function listaClientes()
  {
    $this->select("*");
    $this->where("estado_cliente", 1);
    $resultado = $this->findAll();
    return $resultado;
  }
  public function InfoCliente($id)
  {
    $this->select("*");
    $this->where("id_cliente", $id);
    $resultado = $this->first();
    return $resultado;
  }

  public function InfoClienteUsuario($id)
  {
    $this->select("*");
    $this->join("usuario", "usuario.id_usuario=cliente.id_usuario");
    $this->where("cliente.id_usuario", $id);
    $resultado = $this->first();
    return $resultado;
  }

  public function InfoCliId($id)
  {
    $this->select("*");
    $this->join("usuario", "usuario.id_usuario=cliente.id_usuario");
    $this->where("cliente.id_usuario", $id);
    $resultado = $this->first();
    return $resultado;
  }

  public function ContarCliente()
  {
    $this->select("*");
    $resultado = $this->countAllResults();
    return $resultado;
  }

  public function fotoCliente($idCli)
  {
    $this->select("*");
    $this->where("id_cliente", $idCli);
    $resultado = $this->first();
    return $resultado;
  }
}
