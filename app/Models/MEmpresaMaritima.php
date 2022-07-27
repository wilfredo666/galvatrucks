<?php

namespace App\Models;

use CodeIgniter\Model;

class MEmpresaMaritima extends Model
{
    protected $table      = 'empresa_maritima';
    protected $primaryKey = 'id_emp_maritima';

    protected $returnType     = 'array';

    protected $allowedFields = ['razon_social_emp', 'nit_emp', 'direccion_emp', 'correo_emp', 'contacto_emp'];

}