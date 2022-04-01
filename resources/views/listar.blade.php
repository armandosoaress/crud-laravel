@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
@foreach($alunos as $aluno)
{{$aluno->name}}
<br>
@endforeach


@endsection

