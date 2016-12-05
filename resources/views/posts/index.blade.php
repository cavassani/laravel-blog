@extends('main')

@section('title', '|Todos posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>Todos</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Crie novo Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div><!-- fim .row -->

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Corpo</th>
                    <th>Criado em</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{substr($post->body, 0, 50)}}{{strlen($post->body) > 50 ? "..." : ""}}</td>
                            <td>{{date('M j, Y', strtotime($post->created_at))}}</td>
                            <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-sm">Ver</a>
                                <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-default btn-sm">Editar</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@stop
