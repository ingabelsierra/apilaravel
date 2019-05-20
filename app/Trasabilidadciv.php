<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trasabilidadciv extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];
	
	protected $table = 'trasabilidadcivs';
}
