<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDePeso extends Model
{
    use HasFactory;
    public function nome() {
        return $_GET['nome'];
    }

    public function idade() {
        $data = $_GET['nascimento'];

        list($ano, $mes, $dia) = explode('-', $data);

        // data atual
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        return $idade;
    }

    public function altura() {
        return $_GET['altura'];
    }

    public function massa() {
        return $_GET['peso'];
    }

    public function calcular() {
        $massa = $_GET['peso'];
        $altura = $_GET['altura'];

        $CalculoIMC = round(($massa / ($altura * $altura )), 2);
        $classificacao =" ";
        

        if($CalculoIMC < 18.5) {
            $classificacao = "Magro";
        } else if($CalculoIMC < 24.9) {
            $classificacao = "Normal";
        } else if($CalculoIMC < 29.9) {
            $classificacao = "Sobrepeso";
        } else if($CalculoIMC < 39.9) {
            $classificacao = "Obesidade";
        } else if($CalculoIMC > 40.0) {
            $classificacao = "Obesidade Grave";
        }

        return ["imc"=>$CalculoIMC, "classificacao"=>$classificacao];
    }
}
