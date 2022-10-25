<?php

namespace App\Models;

use CodeIgniter\Model;

class MUsuario extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre_usuario', 'login_usuario', 'pass_usuario','rol', 'activo_usuario'];

  
  public function acceso($data){
    $this->select("*");
    $this->where("login_usuario",$data["usuario"]);
    //$this->where("pass_usuario",$data["password"]);
    
    $resultado=$this->first();
    return $resultado;
  }
  
  public function InfoUsuario($id){
    $this->select("*");
    $this->where("id_usuario",$id);
    
    $resultado=$this->first();
    return $resultado;
  }

  public function InfoUsuarioAsigCredencial(){
    $this->select("*");   
    $this->where("rol", "Cliente");
    $this->where("activo_usuario", 0);
    $resultado=$this->findAll();
    return $resultado;
  }

  public function buscar_usuario($dato_buscar){
    $this->select("*");
    $this->like("login_usuario",$dato_buscar);
    $resultado=$this->findAll();
    return $resultado;
  }

  public function comprobar_usuario($dato_buscar){
    $this->select("*");
    $this->where("login_usuario",$dato_buscar);
    $resultado=$this->first();
    return $resultado;
  }
}