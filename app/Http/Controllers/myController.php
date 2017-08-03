<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ortu;
use App\Anak;

class myController extends Controller
{
    //
    public function index()
    {
    	$a="Rismayt";
    	return "Nama saya adalah <b>".$a."</b>";
    }


    public function tampilan()
    {
    	return view('about');
    }

    public function tampilmodel()
    {
    	$ortu= Ortu::All();
    	$anak= Anak::All();
   		return view('about', compact('ortu','anak'));
   	}


}
