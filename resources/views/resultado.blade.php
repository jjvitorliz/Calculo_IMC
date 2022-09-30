<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="painel">
        <h2>Resultado do cálculo</h2>
        <div class="conteudo-painel">
            <div class='sucesso'>
                <ul>
                    <li><b>Nome:</b> {{$nome}}</li>
                    <li><b>Idade:</b> {{$idade}} anos</li>
                    <li><b>Categoria de Idade:</b> {{$categoria}}</li>
                    <li><b>Altura:</b> {{$altura}} m</li>
                    <li><b>Peso:</b> {{$massa}} kg</li>
                    <li><b>IMC:</b> {{$imc}}</li>
                    <li><b>Classificação do IMC:</b> {{$classificacao}}</li>
                    <li><b>Horas Dormidas:</b> {{$h_dormidas}} horas</li>
                    <li><b>Qualidade do Sono:</b> {{$qdade_sono}}</li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="painel">
        <div class="conteudo-painel">
            <h2>Tabela de Indice de Massa Corporal (IMC):</h2>
            <br>
            <div>
                <table border="1" align="center">
                    <tr align="center">
                        <td>IMC:</td>
                        <td>Classificação:</td>
                        <td>Obesidade(grau):</td>
                    </tr>
                    <tr align="center">
                        <td>Menor que 18,5</td>
                        <td>Magreza</td>
                        <td>0</td>
                    </tr>
                    <tr align="center">
                        <td>Entre 18,5 e 24,9</td>
                        <td>Normal</td>
                        <td>0</td>
                    </tr>
                    <tr align="center">
                        <td>Entre 25,0 e 29,9</td>
                        <td>SobrePeso</td>
                        <td>1</td>
                    </tr>
                    <tr align="center">
                        <td>Entre 30,0 e 39,9</td>
                        <td>Obesidade</td>
                        <td>II</td>
                    </tr>
                    <tr align="center">
                        <td>Maior que 40,0</td>
                        <td>Obesidade Grave</td>
                        <td>III</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="painel">
        <div class="conteudo-painel">
            <h2>Tabela de Recomendação de Sono:</h2>
            <br>
            <div>
                <table border="1">
                    <tr align="center">
                        <td>Idade:</td>
                        <td>Categoria:</td>
                        <td>Horas Recomendadas de Sono:</td>
                    </tr>
                    <tr align="center">
                        <td>1 á 2 anos</td>
                        <td>Primeira Infância</td>
                        <td>11 á 14 horas</td>
                    </tr >
                    <tr align="center">
                        <td>3 á 5 anos</td>
                        <td>Idade Pré-Escolar</td>
                        <td>10 á 13 horas</td>
                    </tr>
                    <tr align="center">
                        <td>6 á 13 anos</td>
                        <td>Idade Escolar</td>
                        <td>9 á 11 horas</td>
                    </tr>
                    <tr align="center">
                        <td>14 á 17 anos</td>
                        <td>Adolescentes</td>
                        <td>8 á 10 horas</td>
                    </tr>
                    <tr align="center">
                        <td>18 á 25 anos</td>
                        <td>Jovens Adultos</td>
                        <td>7 á 9 horas</td>
                    </tr>
                    <tr align="center">
                        <td>26 á 64 anos</td>
                        <td>Adultos</td>
                        <td>7 á 9 horas</td>
                    </tr>
                    <tr align="center">
                        <td>Á partir dos 65 anos</td>
                        <td>Idosos</td>
                        <td>7 á 8 horas</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br>
    <a class="botao" href="{{URL('/')}}" title="voltar">Voltar</a>
</body>
</html>