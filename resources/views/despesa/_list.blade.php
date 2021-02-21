@section ('plugins.Datatables', true )
<div class="card">
  <div class="card-body">
    <table id="tableDespesa" class="display" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Descrição</th>
          <th>Categoria</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
      @foreach($despesa as $d)
        <tr>
          <td>{{ $d->id }}</td>
          <td>{{ $d->descricao }}</td>
          <td>{{ $d->categoria }}</td>
          <td>Editar / Deletar</td>
        </tr>
      @endforeach
      </tbdoy>
    </table>
  </div>
</div>

@section('script')
<script>
    $(document).ready(function() {
        $('#tableDespesa').DataTable();
    } );
</script>
@stop

@end