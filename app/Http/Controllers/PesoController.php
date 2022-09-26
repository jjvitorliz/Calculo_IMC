<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CalculoDePeso;

class PesoController extends Controller
{
    public function index() {
        return view('form');
    }

    public function peso_ideal() {

        $CalculoIMC = new CalculoDePeso();
 
        $nome = $CalculoIMC->nome();
        $idade = $CalculoIMC->idade();
        $massa = $CalculoIMC->massa();
        $altura = $CalculoIMC->altura();
        $retornoimc = $CalculoIMC->calcular();
    
 
         return view('resultado',['nome'=>$nome, 'idade'=>$idade, 'massa'=>$massa, 'altura'=>$altura, 'imc'=>$retornoimc["imc"],'classificacao'=>$retornoimc["classificacao"]]);
    }
}
