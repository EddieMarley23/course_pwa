@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    <p>Bem-vindo à página Home!</p>
    
    <!-- Incluindo o componente -->
    <x-welcome-section />
    
@stop