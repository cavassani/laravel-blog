@extends('main')
@section('title', '|Contato')

@section('content')
    <div class="row">
         <div class="col-md-12">
            <h1>Contate-me</h1>
            <hr>
            <form>
            <div class="form-group">
            <label name="email">E-mail:</label>
            <input id="email" name="email" class="form-control">

            <div class="form-group">
            <label name="subject">Assunto:</label>
            <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
            <label name="message">Mensagem:</label>
            <textarea id="message" name="message" class="form-control">Digite sua mensagem aqui...</textarea>
            </div>

            <input type="submit" value="Envie" class="btn btn-success">
            </form>
         </div>
    </div>
@endsection
