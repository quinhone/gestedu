@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Ver Usuário</h3>
            <br>

            @php

                $linkEdit = route('admin.subjects.edit', ['subjects' => $subject->id]);
                $linkDelete = route('admin.subjects.destroy', ['subjects' => $subject->id]);

                $formDelete = FormBuilder::plain([
                    'id' => 'form-delete',
                    'url' => $linkDelete,
                    'method' => 'DELETE',
                    'style' => 'dusplay:nome'
                ])
            @endphp

            {!!  Button::primary(Icon::pencil().' Editar')->asLinkTo($linkEdit) !!}
            {!!  Button::danger(Icon::remove().' Excluir')->asLinkTo($linkDelete)
                  ->addAttributes([
                      'onclick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
                  ])
            !!}

            {!! form($formDelete) !!}
            <br><br>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td>{{$subject->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{$subject->name}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection