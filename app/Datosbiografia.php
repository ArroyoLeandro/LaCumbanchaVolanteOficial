<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datosbiografia extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table='datosbiografia';
	// protected $dates = ['deleted_at'];
    protected $fillable = [
    	'id',
    	'titulo',
        'descripcion',
        'Imagen',
    ];


}
