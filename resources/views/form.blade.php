<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Indice de Massa Corpórea(IMC):</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que
                seu peso e a sua altura nos campos abaixo e compare com os índices da tabela!</p>
            </div>
        </div>
        <div class="painel">
            <h2>Cálculo do IMC:</h2>
            <div class="conteudo-painel">
                <form action="{{url('/peso_ideal')}}" method="get">
                    <label for="nome">Nome:</label>
                    <input type="text" class="campoTexto" name="nome" placeholder="Seu Nome..." required/>
                    <br><br>
                    <label for="nascimento">Data de Nascimento:</label>
                    <input type="date" class="campoTexto" name="nascimento" placeholder="Data de Nascimento..." required/>
                    <br><br>
                    <label for="altura">Altura:</label>
                    <input type="number" class="campoTexto" name="altura" step="0.01" placeholder="Altura (m)..." required/>
                    <br><br>
                    <label for="peso">Massa:</label>
                    <input type="number" class="campoTexto" name="peso" step="0.01" placeholder="Peso/Massa (kg)..." required/>
                    <br><br>
                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>