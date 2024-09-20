@extends('adminlte::page')

@section('title', 'Anotações')

@section('content_header')
    <h1>Anotações</h1>
@stop

@section('content')
    <form action="/anotations/save" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título da Anotação</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título">
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Digite a descrição"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Anotação</button>
    </form>
@stop

