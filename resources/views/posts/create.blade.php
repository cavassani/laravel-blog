@extends('main')

@section('title', '| Create New Post')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Crie uma nova Postagem</h1>
            <hr>

            {!! Form::open(array('route' => 'posts.store'))!!}
                {{ Form::label('title', 'Titulo:')}}
                {{ Form::text('title', null, array('class'=>'form-control'))}}

                {{ Form::label('body', "Postagem:")}}
                {{ Form::textarea('body', null, array('class'=> 'form-control'))}}

                {{Form::submit(' Criar Postagem', array('class'=> ' btn
                    btn-success btn-lg btn-block', 'style'=>'margin-top:20px'))}}
            {!! Form::close() !!}
        </div>
    </div>


@endsection

@section('scripts')
    {{!! Html::script('js/parsley.min.js') !!}}
@endsection
