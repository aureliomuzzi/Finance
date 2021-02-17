@extends('adminlte::page')

@section('title', 'Finance')

@section('content_header')
    <h1>Despesas</h1>
@stop

@section('content')
    
<div class="card">
  <div class="card-body">
  @if( Request::is('*/edit'))
    <form action="{{ url('despesa/update') }}/{{ $despesa->id }}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="descricao" placeholder="Descrição da Despesa"  value="{{ $despesa->descricao }}">
            </div>
            <div class="col-sm-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="despesaFixa" id="despesaFixa" value= "F {{ $despesa->categoria == 'F' ? 'checked' : '' }}">
                    <label class="form-check-label" for="despesaFixa"> Despesa FIXA </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="despesaVariada" id="despesaVariada" value= "V {{ $despesa->categoria == 'V' ? 'checked' : '' }}">
                    <label class="form-check-label" for="despesaVariada"> Despesa VARIADA </label>
                </div>
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Salvar Descrição</button>
            </div>
        </div>
    </form>
  @else
    <form action="{{ url('despesa/create') }}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="descricao" placeholder="Descrição da Despesa">
            </div>
            <div class="col-sm-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="despesaFixa" id="despesaFixa" value= "F">
                    <label class="form-check-label" for="despesaFixa"> Despesa FIXA </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="despesaVariada" id="despesaVariada" value="V">
                    <label class="form-check-label" for="despesaVariada"> Despesa VARIADA </label>
                </div>
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Salvar Descrição</button>
            </div>
        </div>
    </form>
  @endif
    
  </div>
</div>

<div class="card">
  <div class="card-body">
    <table class="table table-striped"id="tableDespesa" >
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($despesa as $d)
            <tr>
            <th scope="row">{{ $d->id }}</th>
            <td>{{ $d->descricao }}</td>
            <td>{{ $d->categoria }}</td>
            <td>
                <a href="#" class="btn btn-outline-info">Editar</a>
            </td>
            <td>
                <form action="#" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger">Deletar</button>
                </form>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>

  </div>
</div>

@stop
@section('script')
<script>
    $(document).ready( function () {
        $('#tableDespesa').DataTable();
    } );
</script>
@stop