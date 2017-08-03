<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    //
    protected $table='ortu';
    protected $fillable=['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible=['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamp=true;

    public function anak()
    {
    	return $this->hasMany('App\Anak','orangtua_id');
    }
}
