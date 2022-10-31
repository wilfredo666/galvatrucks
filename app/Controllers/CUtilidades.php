<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Ifsnop\Mysqldump as IMysqldump;


class CUtilidades extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('utilidades/backUpBD');
        echo view('footer');
    }
    /* para crear la base de datos */
    public function backupDataBase()
    {


        /* try {
            $dump = new IMysqldump\Mysqldump('mysql:host=localhost;dbname=galvatrucks', 'root', '');
            $dump->start('utilidades/backup/dump.sql');
        } catch (\Exception $e) {
            echo 'mysqldump-php error: ' . $e->getMessage();
        } */
    }
}
