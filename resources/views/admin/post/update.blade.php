@extends('layouts.painel')

@section('content')


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

                            @forelse($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->titulo}}</td>
                                    <td>{{$post->conteudo}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->user->name}}</td>
                                </tr>
                            @empty
                                <p>Nenhum post encontrado</p>
                            @endforelse

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

@endsection