<?php

namespace App\Models;

use CodeIgniter\Model;

class MUsuario extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre_usuario', 'login_usuario', 'pass_usuario'];

}