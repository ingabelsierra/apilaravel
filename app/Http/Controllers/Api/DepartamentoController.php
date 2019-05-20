<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Departamento;

class DepartamentoController extends BaseController
{
    public function index() {
        $departamento= Departamento::all();
        return $this->sendResponse($departamento->toArray(), 'Datos de la tabla Departamentos.');
    }
}
