<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function login(){
        return view('login');
    }

    public function painel(){
        return view('painel');
    }

    public function controleDetentos(){
        return view('controle/controleDetentos');
    }
    
    public function controleCelas(){
        return view('controle/controleCelas');
    }

    public function controleMovimentos(){
        return view('controle/controleMovimentos');
    }

    public function controleVisitas(){
        return view('controle/controleVisitas');
    }

}


