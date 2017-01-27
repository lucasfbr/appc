<?php $__env->startSection('content'); ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Perfil do Usuário
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Painel</a></li>
            <li class="active">Perfil do Usuário</li>
        </ol>

        <?php if(session('sucesso')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <?php echo e(session('sucesso')); ?>

            </div>
        <?php elseif(session('erro')): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <?php echo e(session('erro')); ?>

            </div>
        <?php endif; ?>


    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo e(Auth::user()->foto); ?>"
                             alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h3>

                        <p class="text-muted text-center"><?php echo e(Auth::user()->profissao); ?>

                            <br/> <?php echo e(Auth::user()->empresa); ?></p>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sobre mim</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Educação</strong>

                        <p class="text-muted">
                            <?php echo e(Auth::user()->educacao); ?>

                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Localização</strong>

                        <p class="text-muted"><?php echo e(Auth::user()->cidade); ?> , <?php echo e(Auth::user()->estado); ?></p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Habilidades</strong>

                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notas</strong>

                        <p> <?php echo e(Auth::user()->notas); ?></p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Alterações do Perfil</a></li>
                        <li><a href="#timeline" data-toggle="tab">Linha do Tempo</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            <ul class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-envelope bg-blue"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                        <div class="timeline-body">
                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                            quora plaxo ideeli hulu weebly balihoo...
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">Read more</a>
                                            <a class="btn btn-danger btn-xs">Delete</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-user bg-aqua"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your
                                            friend request
                                        </h3>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-comments bg-yellow"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post
                                        </h3>

                                        <div class="timeline-body">
                                            Take me to your leader!
                                            Switzerland is small and neutral!
                                            We are more like Germany, ambitious and misunderstood!
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-camera bg-purple"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                        <div class="timeline-body">
                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <li>
                                    <i class="fa fa-clock-o bg-gray"></i>
                                </li>
                            </ul>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="active tab-pane" id="settings">
                            <form class="form-horizontal" method="post"
                                  action="<?php echo e(url('painel/perfil/update/'. Auth::user()->id)); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <label for="name" class="col-sm-2 control-label">Nome</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="<?php echo e(Auth::user()->name); ?>">

                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>

                                </div>
                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="<?php echo e(Auth::user()->email); ?>">

                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('profissao') ? ' has-error' : ''); ?>">
                                    <label for="profissao" class="col-sm-2 control-label">Profissão</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="profissao" name="profissao"
                                               value="<?php echo e(Auth::user()->profissao); ?>">

                                        <?php if($errors->has('profissao')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('profissao')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('empresa') ? ' has-error' : ''); ?>">
                                    <label for="empresa" class="col-sm-2 control-label">Empresa</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="empresa" name="empresa"
                                               value="<?php echo e(Auth::user()->empresa); ?>">

                                        <?php if($errors->has('empresa')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('empresa')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fone" class="col-sm-2 control-label">Telefone Fixo</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fone" name="fone"
                                               value="<?php echo e(Auth::user()->fone); ?>">
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('celular') ? ' has-error' : ''); ?>">
                                    <label for="celular" class="col-sm-2 control-label">Celular</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="celular" name="celular"
                                               value="<?php echo e(Auth::user()->celular); ?>">

                                        <?php if($errors->has('celular')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('celular')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('estado') ? ' has-error' : ''); ?>">
                                    <label for="estado" class="col-sm-2 control-label">Estado</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="estado" name="estado"
                                               value="<?php echo e(Auth::user()->estado); ?>">

                                        <?php if($errors->has('estado')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('estado')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('cidade') ? ' has-error' : ''); ?>">
                                    <label for="cidade" class="col-sm-2 control-label">Cidade</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cidade" name="cidade"
                                               value="<?php echo e(Auth::user()->cidade); ?>">

                                        <?php if($errors->has('cidade')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('cidade')); ?></strong>
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="educacao" class="col-sm-2 control-label">Educação</label>

                                    <div class="col-sm-10">


                                                    <textarea id="educacao" name="educacao" rows="10"  class="form-control">
                                                        <?php echo e(Auth::user()->educacao); ?>

                                                    </textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="habilidades" class="col-sm-2 control-label">Habilidades</label>

                                    <div class="col-sm-10">


                                                    <textarea id="habilidades" name="habilidades" rows="10" class="form-control">
                                                        <?php echo e(Auth::user()->habilidades); ?>

                                                    </textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="notas" class="col-sm-2 control-label">Notas</label>

                                    <div class="col-sm-10">

                                                    <textarea id="notas" name="notas" rows="10" class="form-control">
                                                        <?php echo e(Auth::user()->notas); ?>

                                                    </textarea>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Alterar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>