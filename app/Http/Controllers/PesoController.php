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
        $retornoidade = $CalculoIMC->idade();
        $massa = $CalculoIMC->massa();
        $altura = $CalculoIMC->altura();
        $retornoimc = $CalculoIMC->calcular();
    
        return view('resultado',['nome'=>$nome, 'idade'=>$retornoidade['idade'], 'h_dormidas'=>$retornoidade['h_dormidas'], 'categoria'=>$retornoidade['categoria'], 'qdade_sono'=>$retornoidade['qdade_sono'], 'massa'=>$massa, 'altura'=>$altura, 'imc'=>$retornoimc["imc"],'classificacao'=>$retornoimc["classificacao"]]);
    }
}
