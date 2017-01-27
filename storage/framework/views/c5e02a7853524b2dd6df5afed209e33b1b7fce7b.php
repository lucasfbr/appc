<?php $__env->startSection('content'); ?>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Posts</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th>Data</th>
                                <th>Autor</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($post->id); ?></td>
                                    <td><?php echo e($post->titulo); ?></td>
                                    <td><?php echo e($post->conteudo); ?></td>
                                    <td><?php echo e($post->created_at); ?></td>
                                    <td><?php echo e($post->user->name); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                                <p>Nenhum post encontrado</p>
                            <?php endif; ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th>Data</th>
                                <th>Autor</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>