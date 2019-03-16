<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UltimoAlbum extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table='UltimoAlbum';
	// protected $dates = ['deleted_at'];
    protected $fillable = [
    	'id',
    	'imagen',
        'link',
    ];
}
