<?php

namespace App\Http\Controllers\Api;

use App\Trasabilidadciv;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\API\BaseController as BaseController;

class TrasabilidadcivController extends BaseController
{
    public function index()
    {
        $trasabilidad = Trasabilidadciv::all();			
		return $this->sendResponse($trasabilidad->toArray(), 'Datos de la tabla trasabilidad.');
					
    }
	
  
    public function store(Request $request)
    {
        $input = $request->all();
		
        $validator = Validator::make($input, [
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Error en la validacion de los datos.', $validator->errors());       
        }

        $trasabilidad = Trasabilidadciv::create($input);

        return $this->sendResponse($trasabilidad->toArray(), 'registro creado.');
    }

    public function show($id)
    {
        $trasabilidad = Trasabilidadciv::find($id);

        if (is_null($trasabilidad)) {
            return $this->sendError('Registro no encontrado.');
        }


        return $this->sendResponse($trasabilidad->toArray(), 'Registro encontrado.');
    }

 
    public function update(Request $request, Trasabilidadciv $trasabilidad)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Error en la validacion de los datos.', $validator->errors());       
        }

        $trasabilidad->nombre = $input['nombre'];
        $trasabilidad->descripcion = $input['descripcion'];
        $trasabilidad->save();

        return $this->sendResponse($trasabilidad->toArray(), 'Registro actualizado con exito.');
    }

    public function destroy($id)
    {
        $trasabilidad = Trasabilidadciv::find($id);
		
		$trasabilidad->delete();

        return $this->sendResponse($trasabilidad->toArray(), 'Registro eliminado con exito.');
    }
}
