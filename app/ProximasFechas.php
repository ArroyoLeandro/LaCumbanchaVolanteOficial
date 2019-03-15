<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProximasFechas extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table='ProximasFechas';
	// protected $dates = ['deleted_at'];
    protected $fillable = [
    	'id',
    	'fecha',
        'nombre',
        'lugar',
        'hora',
        'link',
        'Imagen',
    ];
}
