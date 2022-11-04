<?php

namespace App\Controllers;

use App\Models\MCliente;
use App\Models\MUsuario;
use App\Models\MSolicitudServicio;
use App\Models\MEmpresaMaritima;
use App\Models\MServicio;

class CCliente extends BaseController
{
    public function __construct()
    {
        $this->MCliente = new MCliente();
        $this->MUsuario = new MUsuario();
        $this->MSolicitudServicio = new MSolicitudServicio();
        $this->MEmpresaMaritima = new MEmpresaMaritima();
        $this->MServicio = new MServicio();
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
            "cliente" => $this->MCliente->InfoCliente($id),
            "accesos" => $this->MUsuario->InfoUsuarioAsigCredencial()
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

        $credenciales = $_POST["idUsuarioAcceso"];

        $data2 = array(
            "activo_usuario" => 1
        );

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
            "imagen_cli" => $foto,
            "id_usuario" => $credenciales
        );

        $this->MCliente->update($id, $data);
        $this->MUsuario->update($credenciales, $data2);
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
    /* REPORTE CLIENTE */
    public function repCliente()
    {
        $data = array(
            "cliente" => $this->MCliente->findAll()
        );
        /* var_dump($data); */
        echo view('header');
        echo view('cliente/repCliente', $data);
        echo view('footer');
    }
    public function reporteCli()
    {
        $id = $_POST["cliente"];
        $fechaDesde = $_POST["fechaDesde"];
        $fechaHasta = $_POST["fechaHasta"];

        $serv = array(
            "idCliente" => $id,
            "fechaDesde" => $fechaDesde,
            "fechaHasta" => $fechaHasta
        );

        $data = array(
            "cliente" => $this->MCliente->InfoCliente($id),
            "servicios" => $this->MServicio->InfoServCliente($serv)
        );
        /* var_dump($data); */
        echo view('cliente/repLlenadoCliente', $data);
    }

    public function repRolCliente()
    {
        $id_cliente = session("usuario.id_cliente");
        $data = array(
            "servicios" => $this->MServicio->lista_servicios($id_cliente)
        );
        echo view('header');
        echo view('cliente/rolCliente/repRolCliente', $data);
        echo view('footer');
    }
    public function reporteRolCli()
    {
        $id = $_POST["idCliente"];
        $fechaDesde = $_POST["fechaDesde"];
        $fechaHasta = $_POST["fechaHasta"];

        $serv = array(
            "idCliente" => $id,
            "fechaDesde" => $fechaDesde,
            "fechaHasta" => $fechaHasta
        );

        $data = array(
            /* "cliente" => $this->MCliente->InfoCliente($id), */
            "servicios" => $this->MServicio->InfoServClienteFechas($serv)
        );
        /* var_dump($data); */
        echo view('cliente/rolCliente/repLlenadoRolCliente', $data);
    }
    public function contadorServicio(){
        $id_cliente = session("usuario.id_cliente");
        $data = array(
            /* "cliente" => $this->MCliente->InfoCliente($id), */
            "servicios" => $this->MServicio->InfoServClienteContador($id_cliente),
            "soli" => $this->MSolicitudServicio->InfoServClienteContador2($id_cliente)
        );
        /* var_dump($data); */
        echo view('header');
        echo view('panel_principal', $data);
        echo view('footer');
    }

    /* -----------------------------------------------
    FUNCIONES PARA EL ROL CLIENTE
    ---------------------------------------------------*/
    public function miPerfil()
    {
        $id_usuario = session("usuario.id_usuario");
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
        /* id del cliente */
        $id = $this->request->uri->getSegment(3);

        /* id del usuario */
        $idUsuario = session("usuario.id_usuario");

        $correo = $_POST["correoCli"];
        $contacto = $_POST["contactoCli"];
        $nombreCli = $_POST["nombreCli"];
        $apellidoCli = $_POST["apellidoCli"];
        $direccion = $_POST["direccionCli"];
        $ctaBancaria = $_POST["cuentaCli"];
        $pass1 = $_POST["password"];
        $passActual = $_POST["passwordActual"];

        $password = "";

        if ($pass1 == $passActual) {
            $password = $pass1;
        } else {
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        }

        $fotoCli = $_FILES["fotoCli"];

        if ($fotoCli["name"] == "") {
            $foto = $_POST["fotoCliActual"];
        } else {
            $ruta = "assest/img/cliente/";
            $foto = $fotoCli["name"];
            $tmpFoto = $fotoCli["tmp_name"];
            move_uploaded_file($tmpFoto, $ruta . $foto);
        } 

        /* $pass1 = password_hash($_POST["password"], PASSWORD_DEFAULT); */
        /* var_dump($pass1); */
        /* $pass2= $_POST["password2"]; */

        $data = array(
            "contacto_cli" => $contacto,
            "nombre_cli" => $nombreCli,
            "apellido_cli" => $apellidoCli,
            "num_cuenta_cli" => $ctaBancaria,
            "direccion_cli" => $direccion,
            "email_cli" => $correo,
            "imagen_cli" => $foto   
        );
        $datoPassword = array(
            "pass_usuario" => $password
        );
        $this->MCliente->update($id, $data);
        $this->MUsuario->update($idUsuario, $datoPassword);
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
        /* $fechaDesde = $_POST["fechaDesde"];
        $fechaHasta = $_POST["fechaHasta"]; */

        $sql = array(
            "estado" => $estado,
            /* "fechaDesde" => $fechaDesde,
            "fechaHasta" => $fechaHasta, */
        );

        $data = array(
            "EstadoSolicitud" => $this->MSolicitudServicio->DetalleSolicitud($sql)
        );

        /*  var_dump($sql); */
        echo view('solicitudServicio/resulSolicitud', $data);
    }

    public function FVerSolicitud()
    {
        $id = $this->request->uri->getSegment(3);

        $data = array(
            "solicitudServ" => $this->MSolicitudServicio->InfoSolicitud($id)
        );
        echo view("solicitudServicio/MVerSolicitud", $data);
    }
    /* FUNCION PARA ELIMINAR SOLICITUD POR EL ADMINISTRADOR */
    public function FEliSolicitudAdmi()
    {
        $id = $this->request->uri->getSegment(3);

        echo view("solicitudServicio/FEliSolicitudAdmi", compact("id"));
    }
    public function EliSolicitudAdmin()
    {
        $id = $this->request->uri->getSegment(3);
        $this->MSolicitudServicio->delete($id);
    }

    /* solicitud para aceptar o rechazr solicitud por el administrador */
    public function EditSolicitudAdmin()
    {
        $id = $this->request->uri->getSegment(3);
        $observaciones = $_POST["observaciones"];
        $estadoSoli = $_POST["estadoSoli"];

        $data = array(
            "observaciones" => $observaciones,
            "activo_solicitud" => $estadoSoli
        );
        $this->MSolicitudServicio->update($id, $data);
    }
    /*------------fin de respuesta solicitud clientes ---------*/
    public function seguimientoCont()
    {
        echo view('header');
        echo view('cliente/rolCliente/seguimiento');
        echo view('footer');
    }

    public function foto(){
        $id_cliente=session("usuario.id_cliente");
        $data = array(
            "fotoCli" => $this->MCliente->fotoCliente($id_cliente)
          );
        /* var_dump($data); */
          /* echo view('header',$data); */
    }
}
