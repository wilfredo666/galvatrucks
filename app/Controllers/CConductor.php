<?php

namespace App\Controllers;
use App\Models\MConductor;

class CConductor extends BaseController
{
    public function __construct()
    {
        $this->MConductor= new MConductor();
    }

    public function index(){
        $data= array(
            "conductor"=>$this->MConductor->findAll()
        );

        echo view('header');
        echo view('conductor/conductor',$data);
        echo view('footer');
    }
  
}