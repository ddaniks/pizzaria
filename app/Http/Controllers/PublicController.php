<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller{
   
    public function landing(){
        $data = ['textcolor' => 'red-text', 'title' => 'Nosso primeiro componente dinâmico', 'body' => 'Hoje nós arrebentamos a boca do balão'];
        return view('public.landing',['data' => $data]);
    }

    public function cardapio(){
        return view ('cardapio');

    }
    
    public function atv(){
        return view ('atv');

    }

}
