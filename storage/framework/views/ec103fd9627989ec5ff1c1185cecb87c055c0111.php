<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Site de consultoria</title>

    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/estilo.css" rel="stylesheet">

</head>
<body>

<body data-spy="scroll" data-target=".menu-navegacao" data-offset="80">

<!-- Menu da aplicacao -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Logo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right menu-navegacao" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#page-top"></a></li>
                <li class="active"><a href="/">Início</a></li>

                <?php if(!isset(explode('/', Request::url())[3])): ?>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#portifolio">Portifólio</a></li>
                    <li><a href="#quemsomos">Quem Somos</a></li>
                    <li><a href="#localizacao">Localização</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="/painel">Entrar</a></li>
                <?php else: ?>
                    <li><a href="/servicos">Servicos</a></li>
                    <li><a href="/portifolio">Portifólio</a></li>
                    <li><a href="/quemsomos">Quem Somos</a></li>
                    <li><a href="/painel">Entrar</a></li>
                <?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

    <div class="divslider">

        <!-- Slider da aplicacao -->
        <div id="sliderprincipal" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#sliderprincipal" data-slide-to="0" class="active"></li>
                <li data-target="#sliderprincipal" data-slide-to="1"></li>
                <li data-target="#sliderprincipal" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/sliders/foto1.jpg" class="img-responsive" alt="...">
                    <div class="carousel-caption">
                        <h3>Foto 1</h3>
                        <p>Descricao da foto</p>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/sliders/foto2.jpg" class="img-responsive" alt="...">
                    <div class="carousel-caption">
                        <h3>Foto 2</h3>
                        <p>Descricao da foto</p>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/sliders/foto3.jpg" class="img-responsive" alt="...">
                    <div class="carousel-caption">
                        <h3>Foto 3</h3>
                        <p>Descricao da foto</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#sliderprincipal" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#sliderprincipal" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Fim Slider da aplicacao -->
    </div>

    <!-- Servicos -->
    <section id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Servicos
                            <small>conheca oque fazemos</small>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/civel.jpg" class="img-responsive img-circle"></div>
                    <h4>Direito Civil</h4>
                    <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/penal.png" class="img-responsive img-circle"></div>
                    <h4>Direito Penal</h4>
                    <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/trabalho.jpg" class="img-responsive img-circle"></div>
                    <h4>Direito do Trabalho</h4>
                    <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/consumidor.png" class="img-responsive img-circle"></div>
                    <h4>Direito do Consumidor</h4>
                    <p>descricao do servico apresentado. texto texto texto texto texto texto</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-center btn-todos">
                    <a href="/servicos" class="btn btn-default btn-lg">Veja todos nossos servicos</a>

                    <a href="/home" class="btn btn-success btn-lg">Contratar consultoria on-line agora</a>

                    <!-- Button trigger modal -->
                    <!--<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                        Contratar consultoria on-line agora
                    </button>-->

                </div>
            </div>
        </div>
    </section>
    <!-- Fim Servicos -->

    <!-- Portifolio -->
    <section id="portifolio" class="div_colorida">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Portifolio
                            <small>conheca nossos trabalhos</small>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row portifolio-row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="portifolio_item">
                        <div><img src="/images/foto2.jpg" class="img-responsive grayscale"></div>
                        <h4>Agrale</h4>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="portifolio_item">
                        <div><img src="/images/foto2.jpg" class="img-responsive grayscale"></div>
                        <h4>Azaléia</h4>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="portifolio_item">
                        <div><img src="/images/foto2.jpg" class="img-responsive grayscale"></div>
                        <h4>Gerdau</h4>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="portifolio_item">
                        <div><img src="/images/foto2.jpg" class="img-responsive grayscale"></div>
                        <h4>Grendene</h4>

                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-xs-12 text-center btn-todos">
                    <a href="/portifolio" class="btn btn-default btn-lg">Veja o portifolio completo</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim Portifolio -->

    <!-- Quem somos -->
    <section id="quemsomos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Quem Somos
                            <small>conheca nossa historia</small>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 row-quemSomos">
                    <div class="col-sm-8 text-right">
                        <h4>Texto sobre a empresa</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                            in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                            Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                            in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                            Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img src="/images/foto.jpg" class="img-responsive img-rounded quemSomos-img">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="col-sm-4">
                        <img src="/images/foto.jpg" class="img-responsive img-rounded quemSomos-img">
                    </div>
                    <div class="col-sm-8 text-left">
                        <h4>Missão da empresa</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                            in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                            Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In consequat, orci id volutpat varius, odio nulla condimentum mauris,
                            in pharetra purus neque ac magna. Praesent consectetur ex eget hendrerit vehicula.
                            Mauris sit amet metus et mi suscipit aliquam ac in nibh. In euismod urna nec lectus.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 text-center btn-todos">
                    <a href="/quemsomos" class="btn btn-default btn-lg">Veja mais</a>
                </div>
            </div>


        </div>
    </section>
    <!-- FimQuem somos -->

    <!-- Nossa equipe -->
    <section id="nossa-equipe" class="div_colorida">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Nossa Equipe
                            <small>conheça nossos colaboradores</small>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row nossaEquipe-item">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/foto.jpg" class="img-responsive img-circle"></div>
                    <h4>Colaborador 1</h4>
                    <p>Breve descriãço do colaborador.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/foto.jpg" class="img-responsive img-circle"></div>
                    <h4>Colaborador 2</h4>
                    <p>Breve descriãço do colaborador.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/foto.jpg" class="img-responsive img-circle"></div>
                    <h4>Colaborador 3</h4>
                    <p>Breve descriãço do colaborador.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 servicos_item">
                    <div><img src="/images/foto.jpg" class="img-responsive img-circle"></div>
                    <h4>Colaborador 4</h4>
                    <p>Breve descriãço do colaborador.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim nossa equipe -->

    <!-- Localizacao -->
    <section id="localizacao">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Localizacao
                            <small>veja onde estamos</small>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1037.8085226721903!2d-51.15935127075266!3d-30.03356683783013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197795847e9b75%3A0xdef6118e72f8063b!2sR.+S%C3%A3o+Leopoldo%2C+429+-+Vila+Jardim%2C+Porto+Alegre+-+RS%2C+91330-690!5e1!3m2!1spt-BR!2sbr!4v1470322356006"
                            width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim Localizacao -->

    <!-- Contato -->
    <section id="contato" class="div_colorida" ng-controller="inicialController">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Contato
                            <small>mande suas duvidas</small>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row contato">
                <div class="col-xs-12">
                    <p class="bg-success aviso">
                        Preencha o formulário abaixo para entrar em contato conosco!
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12">
                    <form name="frmContato" id="frmContato" action="/sendMail" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="nome" id="nome"
                                           placeholder="Qual é seu nome?" required minlength="2">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="email" id="email"
                                           placeholder="Qual o seu email?" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="telefone" id="telefone"
                                           placeholder="Qual o seu telefone?" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group contato">
                                <textarea class="form-control input-lg" rows="6" name="mensagem" id="mensagem"
                                          placeholder="Sua mensagem!" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-lg">Enviar Formulário</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim Contato -->


    <!-- INICIO MODAL DE PAGAMENTO  -->
    <!-- Modal -->
    <!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><h4 class="modal-title text-center" id="myModalLabel">Trabalhamos com o PagSeguro da UOL que é uma marca confiável e reconhecida no Brasil Inteiro.</h4></strong>
                </div>
                <div class="modal-body">
                    <img src="https://stc.pagseguro.uol.com.br/public/img/banners/pagamento/todos_estatico_550_100.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com Visa, Mastercard, Diners, American Express, Hipercard, Aura, Elo, PLENOCard, PersonalCard, BrasilCard, FORTBRASIL, Cabal, Mais!, Avista, Grandcard, Sorocred, Bradesco, Itaú, Banco do Brasil, Banrisul, Banco HSBC, saldo em conta PagSeguro e boleto.">
                    <br /><br />
                    <div class="col-xs-12">
                        <div class="col-xs-6">
                            <form name="frmContato" id="frmContato" action="/sendMail" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name="nome" id="nome"
                                                   placeholder="Qual é seu nome?" required minlength="2">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name="email" id="email"
                                                   placeholder="Qual o seu email?" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name="telefone" id="telefone"
                                                   placeholder="Qual o seu telefone?" required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>-->
    <!-- FIM MODAL DE PAGAMENTO  -->


    <footer class="navbar-inverse">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 text-left end-rodape">
                    <address>
                        <strong>Matheus Paludo Consultoria Juridica</strong><br>
                        R. São Leopoldo, 429 - Vila Jardim<br>
                        Porto Alegre RS, CEP 91330-690<br>
                        <abbr title="Telefone">Tel:</abbr> (51) 92678620
                    </address>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 text-center ">
                    <div class="icon-rodape">
                        <div class="col-xs-3">
                            <a href="" title="Facebook" alt="Facebook"><img src="/images/icones/facebook.png"
                                                                            class="img-responsive"></a><br/>
                            <a href="" title="Twitter" alt="Twitter"><img src="/images/icones/twitter.png"
                                                                          class="img-responsive"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="" title="Youtube" alt="Youtube"><img src="/images/icones/youtube.png"
                                                                          class="img-responsive"></a><br/>
                            <a href="" title="Linkedin" alt="Linkedin"><img src="/images/icones/linkedin.png"
                                                                            class="img-responsive"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="" title="Skipe" alt="Skipe"><img src="/images/icones/skype.png" class="img-responsive"></a><br/>
                            <a href="" title="Googleplus" alt="Googleplus"><img src="/images/icones/googleplus.png"
                                                                                class="img-responsive"></a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 text-right rodape-direita">

                    <address>
                        Camus | Desenvolvimento Web<br>
                        Site: camusdesenvolvimentoweb.com.br<br>
                        <abbr title="Telefone">Tel:</abbr> (51) 9975-9596
                    </address>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <img src="https://stc.pagseguro.uol.com.br/public/img/banners/pagamento/todos_estatico_550_100.gif" alt="Logotipos de meios de pagamento do PagSeguro" title="Este site aceita pagamentos com Visa, Mastercard, Diners, American Express, Hipercard, Aura, Elo, PLENOCard, PersonalCard, BrasilCard, FORTBRASIL, Cabal, Mais!, Avista, Grandcard, Sorocred, Bradesco, Itaú, Banco do Brasil, Banrisul, Banco HSBC, saldo em conta PagSeguro e boleto.">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

