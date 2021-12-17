<!-- View do Blade - utiliza o conceito de seções -->
<!--
    |layout contendo uma estrutura, e dentro dessa 
    |estrutura teremosbpartes que serão informadas 
    |pelo arquivo que a utilizará. -->


<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Séries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="jumbotron">
<!-- definição de componentes por seção -->
        <h1>@yield('cabecalho')</h1>    
        </div>
        @yield('conteudo')
    </div>
</body>
</html>

