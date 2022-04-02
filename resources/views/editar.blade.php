@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="/update/{{$alunos->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name='name' value='{{$alunos->name}}' class="form-control" id="nome"  placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cidade</label>
    <input type="text" value='{{$alunos->cidade}}' name='cidade' class="form-control" id="cidade" placeholder="cidade">
  </div>
 
  <button type="submit" class="btn btn-primary">editar</button>
</form>


@endsection

