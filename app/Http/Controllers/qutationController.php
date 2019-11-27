<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qutationController extends Controller
{
    //
    public function index(){
    	return view('qutation.index');
    }

    public function create(){
    	return view('qutation.create');
    }
    
}
