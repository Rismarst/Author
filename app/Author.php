<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table='author';
    protected $fillable=['name'];
    protected $visible=['name'];
    public $timestamp=true;

    public function book()
    {
    	return $this->hasMany('App\Book','author_id');
    }
}
