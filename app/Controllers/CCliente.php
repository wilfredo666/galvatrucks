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

    /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVO CLIENTE 
    --------------------------------------*/
    public function FNuevoCliente()
    {
        echo view("cliente/FNuevoCliente");
    }

    public function RegCliente()
    {
        $razonSocial = $_POST["razonSocial"];
        $nit = $_POST["nit"];
        $tipoCli = $_POST["tipoCli"];
        $nombreCli = $_POST["nombreCli"];
        $apellidoCli = $_POST["apellidoCli"];
        $estadoCli = $_POST["estadoCli"];
        $fechaNacCli = $_POST["fechaNacCli"];
        $dirCli = $_POST["dirCli"];
        $correoCli = $_POST["correoCli"];
        $contactoCli = $_POST["contactoCli"];
        $ctaCli = $_POST["ctaCli"];
        $cta2Cli = $_POST["cta2Cli"];
        $personaContactoCli = $_POST["personaContactoCli"];
        $fotoCli = $_FILES["fotoCli"];

        $ruta = "assest/img/cliente/";
        $foto = $fotoCli["name"];
        $tmpFoto = $fotoCli["tmp_name"];
        move_uploaded_file($tmpFoto, $ruta . $foto);

        $data = array(
            "nombre_cli" => $nombreCli,
            "apellido_cli" => $apellidoCli,
            "ci_nit_cli" => $nit,
            "fecha_nac_cli" => $fechaNacCli,
            "estado_civil_cli" => $estadoCli,
            "num_cuenta_cli" => $ctaCli,
            "num_cuenta2_cli" => $cta2Cli,
            "razon_social_cli" => $razonSocial,
            "direccion_cli" => $dirCli,
            "email_cli" => $correoCli,
            "contacto_cli" => $contactoCli,
            "persona_contacto_cli" => $personaContactoCli,
            "tipo_cli" => $tipoCli,
            "imagen_cli" => $foto
        );

        $this->MCliente->insert($data);
    }
    /* --------------------------------------
      FUNCIONES PARA VER CLIENTE 
    --------------------------------------*/
    public function MVerCliente()
    {
        $id = $this->request->uri->getSegment(3);

        $data = array(
            "cliente" => $this->MCliente->InfoCliente($id)
        );
        echo view("cliente/MVerCliente", $data);
    }
    /* --------------------------------------
      FUNCIONES PARA EDITAR CLIENTE 
    --------------------------------------*/
    public function FEditCliente()
    {
        $id = $this->request->uri->getSegment(3);

        $data = array(
            "cliente" => $this->MCliente->InfoCliente($id)
        );

        echo view("cliente/FEditCliente", $data);
    }

    public function EditCliente()
    {
        $id = $this->request->uri->getSegment(3);

        $razonSocial = $_POST["razonSocial"];
        $nit = $_POST["nit"];
        $tipoCli = $_POST["tipoCli"];
        $nombreCli = $_POST["nombreCli"];
        $apellidoCli = $_POST["apellidoCli"];
        $estadoCli = $_POST["estadoCli"];
        $fechaNacCli = $_POST["fechaNacCli"];
        $dirCli = $_POST["dirCli"];
        $correoCli = $_POST["correoCli"];
        $contactoCli = $_POST["contactoCli"];
        $ctaCli = $_POST["ctaCli"];
        $cta2Cli = $_POST["cta2Cli"];
        $personaContactoCli = $_POST["personaContactoCli"];
        $fotoCli = $_FILES["fotoCli"];

        if ($fotoCli["name"] == "") {
            $foto = $_POST["fotoCliActual"];
        } else {
            $ruta = "assest/img/cliente/";
            $foto = $fotoCli["name"];
            $tmpFoto = $fotoCli["tmp_name"];
            move_uploaded_file($tmpFoto, $ruta . $foto);
        }

        $data = array(
            "nombre_cli" => $nombreCli,
            "apellido_cli" => $apellidoCli,
            "ci_nit_cli" => $nit,
            "fecha_nac_cli" => $fechaNacCli,
            "estado_civil_cli" => $estadoCli,
            "num_cuenta_cli" => $ctaCli,
            "num_cuenta2_cli" => $cta2Cli,
            "razon_social_cli" => $razonSocial,
            "direccion_cli" => $dirCli,
            "email_cli" => $correoCli,
            "contacto_cli" => $contactoCli,
            "persona_contacto_cli" => $personaContactoCli,
            "tipo_cli" => $tipoCli,
            "imagen_cli" => $foto
        );

        $this->MCliente->update($id, $data);
    }
    /* --------------------------------------
      FUNCIONES PARA ELIMNAR CLIENTE 
    --------------------------------------*/
    public function FEliCliente()
    {
        $id = $this->request->uri->getSegment(3);
        echo view("cliente/FEliCliente", compact("id"));
    }

    public function EliCliente()
    {
        $id = $this->request->uri->getSegment(3);
        $this->MCliente->delete($id);
    }
}
