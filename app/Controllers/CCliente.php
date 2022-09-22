<?php

namespace App\Controllers;

use App\Models\MCliente;
use App\Models\MUsuario;
use App\Models\MSolicitudServicio;

class CCliente extends BaseController
{
    public function __construct()
    {
        $this->MCliente = new MCliente();
        $this->MUsuario = new MUsuario();
        $this->MSolicitudServicio = new MSolicitudServicio();
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

    public function repCliente()
    {
        $data = array(
            "cliente" => $this->MCliente->findAll()
        );

        echo view('header');
        echo view('cliente/repCliente', $data);
        echo view('footer');
    }
    /* -----------------------------------------------
    FUNCIONES PARA EL ROL CLIENTE
    ---------------------------------------------------*/
    public function miPerfil()
    {
        $id_usuario = session("id_usuario");
        /* para enviar ID a miPerfil */
        /* $data=array(
        "idUsuario"=>$id_usuario
          ); */
        $data = array(
            "cliente" => $this->MCliente->InfoClienteUsuario($id_usuario)
        );
        echo view('header');
        echo view('cliente/rolCliente/miPerfil', $data);
        echo view('footer');
    }

    public function ActualizarCli()
    {
        $id = $this->request->uri->getSegment(3);

        $correo = $_POST["correoCli"];
        $contacto = $_POST["contactoCli"];
        $nombreCli = $_POST["nombreCli"];
        $apellidoCli = $_POST["apellidoCli"];
        $direccion = $_POST["direccionCli"];
        $ctaBancaria = $_POST["cuentaCli"];
        /* $fotoCli = $_FILES["fotoCli"];

        if ($fotoCli["name"] == "") {
            $foto = $_POST["fotoCliActual"];
        } else {
            $ruta = "assest/img/cliente/";
            $foto = $fotoCli["name"];
            $tmpFoto = $fotoCli["tmp_name"];
            move_uploaded_file($tmpFoto, $ruta . $foto);
        }  */

        $pass1 = password_hash($_POST["password"], PASSWORD_DEFAULT);
        /* var_dump($pass1); */
        /* $pass2= $_POST["password2"]; */

        $data = array(
            "contacto_cli" => $contacto,
            "nombre_cli" => $nombreCli,
            "apellido_cli" => $apellidoCli,
            "num_cuenta_cli" => $ctaBancaria,
            "direccion_cli" => $direccion,
            "email_cli" => $correo
            /* "imagen_cli" => $foto    */
        );
        $datoPassword = array(
            "pass_usuario" => $pass1
        );
        $this->MCliente->update($id, $data);
        $this->MUsuario->update($id, $datoPassword);
    }
    /* ===============================================
PARA LA RESPUESTA A SOLICITUD DE SERVICIO DE CLIENTES
======================================================*/
    public function solicitudServ()
    {

        $data = array(
            "solicitud" => $this->MSolicitudServicio->findAll()
        );

        echo view('header');
        echo view('solicitudServicio/respSolicitud', $data);
        echo view('footer');
    }

    public function soliServicio()
    {
        $estado = $_POST["estado"];
        $fechaDesde = $_POST["fechaDesde"];
        $fechaHasta = $_POST["fechaHasta"];
        
       var_dump($estado,$fechaDesde,$fechaHasta);
    }
    /*------------fin de respuesta solicitud clientes ---------*/

    public function seguimientoCont()
    {
        echo view('header');
        echo view('cliente/rolCliente/seguimiento');
        echo view('footer');
    }
}
