<?php

namespace App\Controllers;

use App\Models\MEmpresaMaritima;

class CEmpresaMaritima extends BaseController
{
    public function __construct()
    {
        $this->MEmpresaMaritima = new MEmpresaMaritima();
    }

    public function index()
    {
        $data = array(
            "empresaMaritima" => $this->MEmpresaMaritima->findAll()
        );

        echo view('header');
        echo view('empresaMaritima/empMaritima', $data);
        echo view('footer');
    }
    /* --------------------------------------
      FUNCIONES PARA REGISTRAR NUEVA EMPRESA MARITIMA
    --------------------------------------*/
    public function FNuevoEmpMaritima()
    {
        echo view('empresaMaritima/FNuevoEmpMaritima');
    }
    public function RegEmpMaritima()
    {
        $razonSocial = $_POST["razonSocial"];
        $nitEmp = $_POST["nitEmp"];
        $contactoEmp = $_POST["contactoEmp"];
        $correoEmp = $_POST["correoEmp"];
        $dirEmp = $_POST["dirEmp"];
        // llenado en campos como en la base de datos
        $data = array(
            "razon_social_emp" => $razonSocial,
            "nit_emp" => $nitEmp,
            "direccion_emp" => $dirEmp,
            "correo_emp" => $correoEmp,
            "contacto_emp" => $contactoEmp
        );
        $this->MEmpresaMaritima->insert($data);
    }

    /* --------------------------------------
      FUNCIONES PARA REGISTRAR VER EMPRESA MARITIMA
    --------------------------------------*/
    public function MVerEmpMaritima()
    {
        $id = $this->request->uri->getSegment(3);

        $data = array(
            "empMaritima" => $this->MEmpresaMaritima->InfoEmpMaritima($id)
        );
        echo view("empresaMaritima/MVerEmpMaritima", $data);
    }

    /* --------------------------------------
      FUNCIONES PARA REGISTRAR EDITAR EMPRESA MARITIMA
    --------------------------------------*/
    public function FEditEmpMaritima()
    {
        $id = $this->request->uri->getSegment(3);

        $data = array(
            "empMaritima" => $this->MEmpresaMaritima->InfoEmpMaritima($id)
        );

        echo view("empresaMaritima/FEditEmpMaritima", $data);
    }
    public function EditEmpMaritima()
    {
        $id = $this->request->uri->getSegment(3);

        $razonSocial = $_POST["razonSocial"];
        $nitEmp = $_POST["nitEmp"];
        $contactoEmp = $_POST["contactoEmp"];
        $correoEmp = $_POST["correoEmp"];
        $dirEmp = $_POST["dirEmp"];
        // llenado en campos como en la base de datos
        $data = array(
            "razon_social_emp" => $razonSocial,
            "nit_emp" => $nitEmp,
            "direccion_emp" => $dirEmp,
            "correo_emp" => $correoEmp,
            "contacto_emp" => $contactoEmp
        );

        $this->MEmpresaMaritima->update($id, $data);
    }

    /* --------------------------------------
      FUNCIONES PARA REGISTRAR ELIMINAR EMPRESA MARITIMA
    --------------------------------------*/
    public function FEliEmpMaritima()
    {
        $id = $this->request->uri->getSegment(3);

        echo view("empresaMaritima/FEliEmpMaritima", compact("id"));
    }
    public function EliEmpMaritima()
    {
        $id = $this->request->uri->getSegment(3);
        $this->MEmpresaMaritima->delete($id);
    }
}
