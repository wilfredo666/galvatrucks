<?php

namespace App\Models;

use CodeIgniter\Model;

class MEfectivo extends Model
{
    protected $table      = 'cuenta_cliente';
    protected $primaryKey = 'id_cuenta_cli';

    protected $returnType     = 'array';

    protected $allowedFields = ['cod_cuenta_cli','descripcion_cuenta_cli', 'id_cliente', 'fecha_cuenta_cli', 'estado_cuenta_cli'];


    public function InfoEfectivo()
    {
        $this->select("*");
        $this-> join("cliente",'cliente.id_cliente=cuenta_cliente.id_cliente');
        $resultado = $this->findAll();
        return $resultado;
    }
    
    public function BusCuenta($id){
        $this->select("*");
        $this-> join("cliente",'cliente.id_cliente=cuenta_cliente.id_cliente');
        $this->where("id_cuenta_cli", $id);
        $resultado = $this->first();
        return $resultado;
    }
    
}