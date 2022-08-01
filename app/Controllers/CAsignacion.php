<?php

namespace App\Controllers;

use App\Models\MAsignacion;
use App\Models\MConductor;

class CAsignacion extends BaseController
{
    public function __construct()
    {
        $this->MAsignacion = new MAsignacion();
     
    }

    public function index()
    {
        $data = array(
            "asignacion" => $this->MAsignacion->findAll()
        );

        echo view('header');
        echo view('asignacion/asignacion', $data);
        echo view('footer');
    }
}
