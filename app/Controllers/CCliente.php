<?php

namespace App\Controllers;

use App\Models\MCliente;

class CCliente extends BaseController
{
    public function __construct()
    {
        $this->MCliente = new MCliente();
    }

    public function index()
    {
        $data = array(
            "cliente" => $this->MCliente->findAll()
        );

        echo view('header');
        echo view('cliente/cliente', $data);
        echo view('footer');
    }
    public function FNuevoCliente()
    {
        echo view("cliente/FNuevoCliente");
    }

    public function RegCliente()
    {
        $nomConductor = $_POST["nomConductor"];
        $apConductor = $_POST["apConductor"];
        $ciCond = $_POST["ciCond"];
        $categoria = $_POST["categoria"];
        $fechaNac = $_POST["fechaNac"];
        $estadoCond = $_POST["estadoCond"];
        $dirCond = $_POST["dirCond"];
        $correoCond = $_POST["correoCond"];
        $contactoCond = $_POST["contactoCond"];
        $ctaCond = $_POST["ctaCond"];
        $cta2Cond = $_POST["cta2Cond"];
        $personaContacto = $_POST["personaContacto"];
        // $fotoCond=$_POST["fotoCond"];

        $data = array(
            "nombre_cli" => $nomConductor,
            "apellido_cli" => $apConductor,
            "ci_nit_cli" => $ciCond,
            "fecha_nac_cli" => $categoria,
            "estado_civil_cli" => $estadoCond,
            "num_cuenta_cli" => $cta2Cond,
            "num_cuenta2_cli" => $cta2Cond,
            "razon_social_cli" => $fechaNac,
            "direccion_cli" => $dirCond,
            "email_cli" => $correoCond,
            "contacto_cli" => $contactoCond,
            "persona_contacto_cli" => $personaContacto,
            "tipo_cli" => $estadoCond
            // "imagen_cli" => $ctaCond
        );

        $this->MCliente->insert($data);
    }
}
