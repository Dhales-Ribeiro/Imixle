<!DOCTYPE html>
<html lang="pt-br" ng-app="imixle">
<head>
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->

        <title>Imixle Serviços e Sistemas, websites e suporte de TI  </title>

        <!-- CSS -->
        <link href="public/css/all.css" rel="stylesheet">

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbarShadow">
    <div class="container-fluid" style="background: #fff;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img alt="Imixle" src="/images/IMIXLE_LOGO_web.png" class="imsite_site_logo">
                </a>
            </div>

        </div>
    </div><!-- /.container-fluid -->

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a ui-sref="/">INICIO</a></li>
                <li class=""><a ui-sref="sobre">SOBRE A IMIXLE</a></li>
                <li class=""><a href="/news">SERVIÇOS</a></li>
                <li class=""><a href="/products">CONTATO</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<div class="container-fluid im_nopadlr" ui-view></div>

<footer>
    <div class="bg_frame"></div>
    <div class="container-fluid footer hidden-xs">
        <div class="container">
            <div class="col-md-8">
                © Copyright 2003-2017 - Imixle Serviços e Sistemas. All Rights Reserved.
            </div>
            <div class="col-md-4 text-right">
                Mapa do Site | Contato
            </div>
        </div>
    </div>
    <div class="container-fluid footer visible-xs">
        <div class="col-md-12 center">
            © Copyright 2003-2017 - Imixle Serviços e Sistemas.
        </div>
    </div>
</footer>




<!-- Inclui todos os plugins minificados (abaixo), ou inclua arquivos separadados se necessário -->
<script src="public/js/all.js"></script>
</body>
</html>
