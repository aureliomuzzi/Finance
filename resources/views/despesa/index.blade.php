@extends('adminlte::page')

@section('title', 'Finance')

@section('content_header')
    <h1>Despesas</h1>
@stop

@section('content')

@include('despesa._form')
    
@include('despesa._list')

@stop