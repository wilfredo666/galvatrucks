<?php

namespace App\Controllers;
use App\Models\MContratoCamion;

class CContratoCamion extends BaseController
{
    public function __construct()
    {
        $this->MContratoCamion= new MContratoCamion();
    }

    public function index(){
        $data= array(
            "contratoCamion"=> $this->MContratoCamion->findAll()
        );

        echo view('header');
        echo view('contratoCamion/contratoCamion',$data);
        echo view('footer');
    }
  
}