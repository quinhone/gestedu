@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Lista de Usuário</h3>

            {!! Button::primary(Icon::plus().' Nova Turma')->asLinkTo(route('admin.class_informations.create')) !!}

            {!! Table::withContents($class_info->items())
                ->striped()
                ->callback('Ações', function($field, $model){
                    $linkEdit = route('admin.class_informations.edit', ['class_info' => $model->id]);
                    $linkShow = route('admin.class_informations.show', ['class_info' => $model->id]);
                    $linkStudents = route('admin.class_informations.students.index', ['class_info' => $model->id]);
                    return Button::link(Icon::pencil())->asLinkTo($linkEdit).'|'.
                           Button::link(Icon::create('eye-open'))->asLinkTo($linkShow).'|'.
                           Button::link(Icon::create('home'))->asLinkTo($linkStudents);
                })
            !!}

            {!! $class_info->links() !!}

        </div>
    </div>
@endsection