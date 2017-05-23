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

        <style>
            body {
                padding-top: 10px;
                background: #fff !important;
            //background: url("../images/bg.png");
            }
            /* latin-ext */
            @font-face {
                font-family: 'Audiowide';
                font-style: normal;
                font-weight: 400;
                src: local('Audiowide'), local('Audiowide-Regular'), url(./public/fonts/audiowide/7pSgz2MbVvTCvvm7vukSHxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
                font-family: 'Audiowide';
                font-style: normal;
                font-weight: 400;
                src: local('Audiowide'), local('Audiowide-Regular'), url(./public/fonts/audiowide/8XtYtNKEyyZh481XVWfVOltXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }
            @font-face {
                font-family: 'Material Icons';
                font-style: normal;
                font-weight: 400;
                src: url(../fonts/MaterialIcons-Regular.eot);
                /* For IE6-8 */
                src: local('Material Icons'), local('MaterialIcons-Regular'), url(public/fonts/MaterialIcons-Regular.woff2) format('woff2'), url(public/fonts/MaterialIcons-Regular.woff) format('woff'), url(public/fonts/MaterialIcons-Regular.ttf) format('truetype');
            }
            .material-icons.md-18 { font-size: 18px; }
            .material-icons.md-24 { font-size: 24px; }
            .material-icons.md-36 { font-size: 36px; }
            .material-icons.md-48 { font-size: 48px; }
            .im_font{
                font-family: 'Audiowide', cursive;
            }
            .imsite_site_logo {
                height: 32px;
                margin: -7px 0;
            }
            .im_nopadlr{
                padding-left: 0;
                padding-right: 0;
                margin-top: 100px;
            }
            .im_heroi {
                padding: 13px 12px 59px;
            }
            .hero-gear {
                background: url('public/images/icon_hero_gear_im2.png') center center no-repeat;
                width: 488px;
                height: 352px;
                position: absolute;
                top: 157px;
                right: 0;
                bottom: 0;
                //z-index: -10;
            }
            .navbarShadow{
                box-shadow: 0 0 4px rgba(0,0,0,.14),0 4px 8px rgba(0,0,0,.28);
            }
            .background_im {
                //background:url("../images/green_bar.png") #5d9a01;
                //color: #4A5960;
                background-color: #F8F8F8;
                padding: 24px 0;
            }
            .intro p {
                //color: rgb(255, 255, 255);
                display: inline-block;
                font-size: 1.4em;
                font-weight: 300;
                max-width: 800px;
                padding-top: 5px;
            }
            .intro p em {
                color:#5D9A01;
            }
            .intro p span {
                color: rgb(153, 153, 153);
                display: block;
                font-size: 0.8em;
                padding-top: 5px;
            }
            hr {
                background-image: -webkit-linear-gradient(left, transparent, #dbdbdb, transparent);
                background-image: linear-gradient(to right, transparent, #dbdbdb, transparent);
                border: 0;
                height: 1px;
                margin: 22px 0;
            }
            .center {
                text-align: center;
            }
            .material-icons {
                font-family: 'Material Icons';
                font-weight: normal;
                font-style: normal;
                font-size: 24px;
                /* Preferred icon size */
                display: inline-block;
                line-height: 1;
                text-transform: none;
                letter-spacing: normal;
                word-wrap: normal;
                white-space: nowrap;
                direction: ltr;
                /* Support for all WebKit browsers. */
                -webkit-font-smoothing: antialiased;
                /* Support for Safari and Chrome. */
                text-rendering: optimizeLegibility;
                /* Support for Firefox. */
                -moz-osx-font-smoothing: grayscale;
                /* Support for IE. */
                font-feature-settings: 'liga';
            }
            .active{
                border-bottom: 2px solid #5d9a01;
                color: #212121;
                //background-color: transparent;
                font-weight: bold;
            }
            .bg_frame {
                background: url(../images/yello_bar.png);
                font-size: 7px;
                height: 6px;
            }
            .container-fluid.footer{
                background: url(../images/rodape.png);
                padding: 24px 40px 40px;
                color: #f8f8f8;
            }








            h1.headline {
                font-size: 34px;
                color: #36474F;
                margin-bottom: 40px;
            }

            h1 p.gray {
                color: #8a8a8a;

            }
            h1 p.blue {
                color: #1067e4;
            }
            ul.list {
                color: #536E7A;
                list-style: none;
                margin: 0 0 32px 0;
            }
            ul.list li {
                background: url("//gstatic.com/images/icons/material/system/1x/check_googblue_24dp.png") no-repeat top left;
                line-height: 1.8em;
                margin-bottom: .6em;
                padding-left: 36px;
                font-size: 16px;
            }
        </style>

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
                <li class="active"><a href="/">INICIO</a></li>
                <li class=""><a href="/about">SOBRE A IMIXLE</a></li>
                <li class=""><a href="/news">SERVIÇOS</a></li>
                <li class=""><a href="/products">CONTATO</a></li>
            </ul>


        </div><!-- /.navbar-collapse -->
    </div>
</nav>


<div class="container-fluid im_nopadlr">
    <div class="container">
        <header>
            <div class="im_heroi">
                <h1 class="headline text-large">
                    <p class="gray im_font">Construa seu Futuro</p>
                    <p class="blue im_font">Websites modernos e profissionais.</p>
                </h1>
                <ul class="list">
                    <li> Site acessível para todo tipo de dispositivo celular, tablets e computadores.</li>
                    <li>Você atualiza o conteúdo Online a qualquer momento.</li>
                    <li>Seu site atraente, prático e com mais visibilidade</li>
                </ul>


                <md-button md-no-ink class="md-raised" style="padding: 0 48px; color: #1067e4; font-weight: bold">Saiba Mais</md-button>
            </div>
            <div class="hero-gear visible-lg visible-md"></div>
        </header>
    </div>


    <div class="background_im intro">
        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        Técnicos <em>Especialistas</em>.
                        <span>Um atendmento moderno para sua empresa</span>
                    </p>
                </div>
                <div class="col-md-4" style="padding: 8px">
                    <md-button md-no-ink class="md-raised"  style="padding: 0 48px; color: #1067e4; font-weight: bold">Fale com a agente!</md-button>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: #FFFFFF">

        <div class="container" style="padding-top: 30px;">
            <div class="center">
                <h1>Imixle é <em style="color:#5D9A01;">SOLUÇÃO</em> em tecnologia para sua empresa</h1>
                <p style="font-size: 21px;">Entender a necessidade da empresa é encontrar soluções automatizadas, inovadoras e compatíveis com o mercado atual, usar à melhor solução técnica e eficaz faz parte dos principios da Imixle, uma empresa diferenciada e moderna, pois sempre busca a satisfação do cliente superando suas expectativas.</p>
                <hr>
            </div>



            <div class="row">
                <div class="col-md-4">
                    <div class="media">
                        <div class="media-left" style="padding: 15px">
                            <i class="glyphicon glyphicon-ok" style="font-size: 25px; color: #1067e4;"></i>
                        </div>
                        <div class="media-body">
                            <h4>Fornecer um serviço simpático, cortês e eficiente</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left" style="padding: 15px">
                            <i class="glyphicon glyphicon-ok" style="font-size: 25px; color: #1067e4;"></i>
                        </div>
                        <div class="media-body">
                            <h4>Sempre superar as suas expectativas.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="media-left" style="padding: 15px">
                            <i class="glyphicon glyphicon-ok" style="font-size: 25px; color: #1067e4;"></i>
                        </div>
                        <div class="media-body">
                            <h4>Sempre ouvir o que você está dizendo.</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left" style="padding: 15px">
                            <i class="glyphicon glyphicon-ok" style="font-size: 25px; color: #1067e4;"></i>
                        </div>
                        <div class="media-body">
                            <h4>Atender a suas necessidades.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="media-left" style="padding: 15px">
                            <i class="glyphicon glyphicon-ok" style="font-size: 25px; color: #1067e4;"></i>
                        </div>
                        <div class="media-body">
                            <h4>Comunicar-se de forma rápida e segura.</h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left" style="padding: 15px">
                            <i class="glyphicon glyphicon-ok" style="font-size: 25px; color: #1067e4;"></i>
                        </div>
                        <div class="media-body">
                            <h4>Ser honesto, sincero e aberto com você o tempo todo.</h4>
                        </div>
                    </div>
                </div>
            </div>

            <hr>


            <div class="row">

                <div class="col-md-8">
                    <h2 style="padding-bottom: 20px">Nossos <strong style="color:#5D9A01;">Serviços</strong></h2>

                    <div class="col-sm-6">
                        <div class="media">
                            <div class="media-left">
                                <md-button class="md-fab md-mini md-primary">
                                    <md-icon class="material-icons">web</md-icon>
                                </md-button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading bold">Desenvolvimento de websites</h4>
                                Site atraente, prático e com layout que se adapta para visualização em Celulares / Tablets.
                            </div>
                        </div>


                        <div class="media">
                            <div class="media-left">
                                <md-button class="md-fab md-mini md-primary">
                                    <md-icon class="material-icons">android</md-icon>
                                </md-button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading bold">Aplicativos</h4>
                                Desenvolvimento de Aplicativos para Android, aplicativos sob medida, para atender as necessidades
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-6">
                        <div class="media">
                            <div class="media-left">
                                <md-button class="md-fab md-mini md-primary">
                                    <md-icon class="material-icons">desktop_windows</md-icon>
                                </md-button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading bold">Suporte de TI</h4>
                                Suporte tecnológico para solucionar qualquer problema ou dúvida relacionada ao seu computador, notebook ou smartphone
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <md-button class="md-fab md-mini md-primary">
                                    <md-icon class="material-icons">backup</md-icon>
                                </md-button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading bold">Backup de Dados</h4>
                                solução completa em Backup de Dados para garantir que os negócios continuarão existindo no caso de desastres, ou até mesmo de simples falhas tecnológicas ou humanas
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <h2 style="padding-bottom: 20px">Entre em <strong style="color:#5D9A01;">Contato</strong></h2>

                    <form class="col-sm-12">
                        <div class="form-group">
                            <div class="col-sm-6" style="padding: 0 8px 0 0 !important;">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                            </div>
                            <div class="col-sm-6" style="padding: 0 8px 0 0 !important;">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                            </div>

                        </div>

                        <div class="form-group" style="padding: 0 8px 0 0 !important;">
                            <label for="exampleInputPassword2">Assunto</label>
                            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Assunto">
                        </div>

                        <div class="form-group" style="padding: 0 8px 0 0 !important;">
                            <label>Mensagem*</label>
                            <textarea maxlength="5000" data-msg-required="Por favor, escreva sua mensagem" rows="3" class="form-control" name="message" id="message"></textarea>
                        </div>
                        <md-button md-no-ink class="md-raised"  style="color: #1067e4; font-weight: bold">Enviar</md-button>
                    </form>


                </div>



            </div>
            <p>&nbsp;</p>
            <hr>
            <p>&nbsp;</p>
        </div>
    </div>

</div>

<footer>
    <div class="bg_frame"></div>
    <div class="container-fluid footer hidden-xs">
        <div class="col-md-8">
            © Copyright 2003-2017 - Imixle Serviços e Sistemas. All Rights Reserved.
        </div>
        <div class="col-md-4 text-right">
            Mapa do Site | Contato
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
