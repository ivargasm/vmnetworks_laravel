<?php

namespace vmnetworks\Http\Controllers;

use Illuminate\Http\Request;

use vmnetworks\Http\Requests;
use vmnetworks\User;

class FrontController extends Controller
{
    function index(){
    	return view('index');
    }

    function servicios(){
    	return view('servicios');
    }

    function contacto(){
    	return view('contacto');
    }

    function admin(){
        return view('admin');
    }

    function tarjeta($id){
    	$user = User::find($id);
    	$foto = $user->foto;
        $this->id = $id;
    	return view('targeta',compact('user','foto','id'));
    }
}
