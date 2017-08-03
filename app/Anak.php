<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    //
    protected $table='anak';
    protected $fillable=['nama','orangtua_id','umur','alamat'];
    protected $visible=['nama','orangtua_id','umur','alamat'];
    public $timestamp=true;

    public function ortu()
    {
    	return $this->belongsTo('App\Ortu','orangtua_id');
    }
}
