@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Lista de Usuário</h3>

            {!! Button::primary(Icon::plus().' Nova Disciplina')->asLinkTo(route('admin.subjects.create')) !!}

            {!! Table::withContents($subjects->items())
                ->striped()
                ->callback('Ações', function($field, $model){
                    $linkEdit = route('admin.subjects.edit', ['class_info' => $model->id]);
                    $linkShow = route('admin.subjects.show', ['class_info' => $model->id]);
                    return Button::link(Icon::pencil())->asLinkTo($linkEdit).'|'.
                           Button::link(Icon::create('eye-open'))->asLinkTo($linkShow);
                })
            !!}

            {!! $subjects->links() !!}

        </div>
    </div>
@endsection