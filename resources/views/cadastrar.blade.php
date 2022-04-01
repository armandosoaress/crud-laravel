@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="enviar" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name='nome' class="form-control" id="nome"  placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cidade</label>
    <input type="text" name='cidade' class="form-control" id="cidade" placeholder="cidade">
  </div>
 
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


@endsection

