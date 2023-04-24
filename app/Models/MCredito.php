<?php

namespace App\Models;

use CodeIgniter\Model;

class MCredito extends Model
{
    protected $table      = 'credito_cliente';
    protected $primaryKey = 'id_credito';

    protected $returnType     = 'array';

    protected $allowedFields = ['cod_credito','concepto_deposito', 'importe_deposito', 'id_cuenta_cli', 'fecha_deposito'];


    public function InfoCredito()
    {
        $this->select("*");
        $this-> join("cuenta_cliente",'cuenta_cliente.id_cuenta_cli=credito_cliente.id_cuenta_cli');
        $this-> join("cliente",'cliente.id_cliente=cuenta_cliente.id_cliente');
        $resultado = $this->findAll();
        return $resultado;
    }
    
    public function BusCuenta2($id){
        $this->select("*");
        /* $this-> join("cuenta_cliente",'cuenta_cliente.id_cuenta_cli=credito_cliente.id_cuenta_cli'); */
        /* $this-> join("cliente",'cliente.id_cliente=cuenta_cliente.id_cliente'); */
        $this->where("id_credito", $id);
        $resultado = $this->first();
        return $resultado;
    }
}