<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class acceso implements FilterInterface
{
    /*filtros antes de */
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(session("usuario")==null){
            return redirect()->to(base_url('/'))->with('errors',["credenciales"=>"No ha iniciado sesión"])
 
            ;
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}