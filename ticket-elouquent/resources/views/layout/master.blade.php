<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Ticket RU</title>

        <link href="{{ asset('/bootstrap/css/sticky-footer.css') }}" rel="stylesheet">
        <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/bootstrap/css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('/bootstrap/css/table.css') }}" rel="stylesheet">
        
    </head>
<body>

<div class="navbar navbar-default" role="navigation">

    <div class="navbar-header pull-left">

        <a class="navbar-brand" href="http://uepg.br/">
            <img src="https://sistemas.uepg.br/producao/abertura/imagens/UEPG_logo.png" alt="UEPG - Universidade Estadual de Ponta Grossa" class="img-responsive" style="margin-top: -4px;">
        </a>

    </div>

    <div class="navbar-header navbar-right" style="padding: 0 15px;">
        <p class="navbar-text navbar-right">  </p>
        <button type="button" class="btn btn-default navbar-btn pull-right btn-xs" onClick="javascript:document.location='./Login/deslogar.php';">Sair</button>
        <p class="navbar-text navbar-right hidden-xs">  </p>
        <p class="navbar-text pull-left"><i class="glyphicon glyphicon-user"></i> <u>awschemberger</u> </p>

    </div>

</div>

@yield('content')

<footer class="_footer ">
    <div class="container-fluid">
        <p class="navbar-text">© 2015 - <a href="http://pitangui.uepg.br/nti" target="_blank">Núcleo de Tecnologia de Informação - UEPG</a>
            </br>Problemas na visualização? <a href="mailto: internet@uepg.br" target="_blank">internet@uepg.br</a></p>
        <div class="navbar-header navbar-right hidden-xs">
            <a class="navbar-brand" href="http://pitangui.uepg.br/nti" target="_blank">
                <img src="https://sistemas.uepg.br/producao/abertura/imagens/NTI-48x48.png" alt="NTI - Núcleo de Tecnologia de Informação" class="img-responsive" style="margin-top: -4px;">
            </a>
        </div>
    </div>
</footer>

</body>
</html>