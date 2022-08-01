<?php

namespace App\Controllers;
use App\Models\MCamion;

class CCamion extends BaseController
{
    public function __construct()
    {
        $this->MCamion= new MCamion();
    }

    public function index(){
        $data = array(
            "camion"=>$this->MCamion->findAll()
        );

        echo view('header');
        echo view('camion/camion',$data);
        echo view('footer');
    }
  
}