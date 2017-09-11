@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Lista de Usuário</h3>

            {!! Button::primary(Icon::plus().' Novo Usuário')->asLinkTo(route('admin.users.create')) !!}

            {!! Table::withContents($users->items())
                ->striped()
                ->callback('Ações', function($field, $model){
                    $linkEdit = route('admin.users.edit', ['iser' => $model->id]);
                    $linkShow = route('admin.users.show', ['iser' => $model->id]);
                    return Button::link(Icon::pencil())->asLinkTo($linkEdit).'|'.
                           Button::link(Icon::create('eye-open'))->asLinkTo($linkShow);
                })
            !!}

            {!! $users->links() !!}

        </div>
    </div>
@endsection