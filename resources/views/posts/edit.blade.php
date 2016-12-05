@extends('main')
@section('title', "|Editar Postagem")
@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Titulo:')}}
            {{ Form::text('title', null, ["class" => 'form-control'])}}

            {{ Form::label('body', 'Conteúdo:', ['class' => 'form-spacing-top'])}}
            {{ Form::textarea('body', null, ['class' => 'form-control'])}}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Criado em:</dt>
                    <dd>{{ date( 'M j, Y h:ia', strtotime($post->created_at)) }}</dd>

                    <dt>Ultima Atualização:</dt>
                    <dd>{{  date( 'M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancelar', array($post->id), array('class' =>'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Salvar', ['class' => 'btn btn-success btn-block'])}}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div> <!--- -->



@stop
