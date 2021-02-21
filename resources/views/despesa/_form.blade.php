<div class="card">
  <div class="card-body">
    <form action={{route('despesa.store')}} method="POST">
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
                <a href="{{route('despesa.create')}}" class="btn btn-primary">Salvar Descrição</a>
            </div>
        </div>
    </form>   
  </div>
</div>