<?php

namespace App\Controllers;
use App\Models\MCliente;

class CCliente extends BaseController
{
    public function __construct()
    {
        $this->MCliente= new MCliente(); 
    }

    public function index(){
        $data=array(
            "cliente"=>$this->MCliente->findAll()
        );

        echo view('header');
        echo view('cliente/cliente', $data);
        echo view('footer');
    }
    
  
}