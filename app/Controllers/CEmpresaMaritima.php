<?php

namespace App\Controllers;
use App\Models\MEmpresaMaritima;

class CEmpresaMaritima extends BaseController
{
    public function __construct()
    {
        $this->MEmpresaMaritima= new MEmpresaMaritima();
    }

    public function index(){
        $data= array(
           "empresaMaritima" => $this->MEmpresaMaritima->findAll()
        );    

        echo view('header');
        echo view('empresaMaritima/empMaritima',$data);
        echo view('footer');
    }
  
}