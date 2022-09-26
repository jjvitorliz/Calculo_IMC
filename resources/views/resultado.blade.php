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
        <h2>Resultado do cálculo de consumo</h2>
        <div class="conteudo-painel">
            <div class='sucesso'>
                <ul>
                    <li><b>{{$nome}} tem {{$idade}} anos, sua altura é {{$altura}} m, seu peso é {{$massa}} kg e seu IMC é: {{$imc}}. </li>
                    <br>
                    <li><b><big>Classificação:</big></b> {{$classificacao}}</li>
                </ul>
            </div>
            <a class="botao" href="{{URL('/')}}" title="voltar">Voltar</a>
        </div>
    </div>
</body>
</html>