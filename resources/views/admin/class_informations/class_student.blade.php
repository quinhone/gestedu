@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Administração de Alunos e Turma</h3>

            <class-student class-information="{{$class_information->id}}"></class-student>

        </div>
    </div>
@endsection