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

                <?php if(!explode('/', Request::url())[3]): ?>
                    <li><a href="#servicos">Servicos</a></li>
                    <li><a href="#portifolio">Portifólio</a></li>
                    <li><a href="#quemsomos">Quem Somos</a></li>
                    <li><a href="#localizacao">Localização</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="/home">Entrar</a></li>
                <?php else: ?>
                    <li><a href="/servicos">Servicos</a></li>
                    <li><a href="/portifolio">Portifólio</a></li>
                    <li><a href="/quemsomos">Quem Somos</a></li>
                    <li><a href="/home">Entrar</a></li>
                <?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->


    </div><!-- /.container-fluid -->
</nav>

<?php echo $__env->yieldContent('content'); ?>

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
    </div>
</footer>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>
</html>
