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
        $h_dormidas = $_GET['h_dormidas'];

        list($ano, $mes, $dia) = explode('-', $data);

        // data atual
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

        if ($idade < 3) {
            $categoria = "Primeira Infância";
            if ($h_dormidas <= 11) {
                $q_sono = "Má qualidade de sono";
            } else {
                $categoria = "Primeira Infância";
                $q_sono = "Boa Qualidade de Sono";
            }
        } else if ($idade < 6) {
            $categoria = "Idade Pré-Escolar";
            if ($h_dormidas <= 10) {
                $q_sono = "Má qualidade de sono";
            } else {
                $categoria = "Idade Pré-Escolar";
                $q_sono = "Boa Qualidade de Sono";
            }
        } else if ($idade < 14) {
            $categoria = "Idade Escolar";
            if ($h_dormidas <= 9) {
                $q_sono = "Má qualidade de sono";
            } else {
                $categoria = "Idade Escolar";
                $q_sono = "Boa Qualidade de Sono";
            }
        } else if ($idade < 18) {
            $categoria = "Adolescente";
            if ($h_dormidas <= 8) {
                $q_sono = "Má qualidade de sono";
            } else {
                $categoria = "Adolescente";
                $q_sono = "Boa Qualidade de Sono";
            }
        } else if ($idade < 26) {
            $categoria = "Jovem Adulto";
            if ($h_dormidas <= 11) {
                $q_sono = "Má qualidade de sono";
            } else {
                $categoria = "Jovem Adulto";
                $q_sono = "Boa Qualidade de Sono";
            }
        } else if ($idade <= 64) {
            $categoria = "Adulto";
            if ($h_dormidas <= 11) {
                $q_sono = "Má qualidade de sono";
            } else {
                $categoria = "Adulto";
                $q_sono = "Boa Qualidade de Sono";
            }
        } else if ($idade >= 65) {
            $categoria = "Idoso";
            if ($h_dormidas <= 7) {
                $q_sono = "Má qualidade de sono";
            } else {
                $categoria = "Idoso";
                $q_sono = "Boa Qualidade de Sono";
            }
        } 

        return ["idade"=>$idade, "categoria"=>$categoria, "qdade_sono"=>$q_sono, "h_dormidas"=>$h_dormidas];
    }

    public function altura() {
        return $_GET['altura'];
    }

    public function massa() {
        return $_GET['peso'];
    }

    function calcular() {
        $massa = $_GET['peso'];
        $altura = $_GET['altura'];

        $CalculoIMC = round(($massa / ($altura * $altura )), 1);
        $classificacao = "";
        

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
