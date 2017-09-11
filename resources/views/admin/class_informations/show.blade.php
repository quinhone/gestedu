@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Ver Usuário</h3>
            <br>

            @php
                $linkEdit = route('admin.class_informations.edit', ['class_information' => $class_information->id]);
                $linkDelete = route('admin.class_informations.destroy', ['class_information' => $class_information->id]);

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
                    <td>{{$class_information->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Data Início</th>
                    <td>{{$class_information->date_start->format('d/m/Y')}}</td>
                </tr>
                <tr>
                    <th scope="row">Data Fim</th>
                    <td>{{$class_information->date_end->format('d/m/Y')}}</td>
                </tr>
                <tr>
                    <th scope="row">Ciclo</th>
                    <td>{{$class_information->cycle}}</td>
                </tr>
                <tr>
                    <th scope="row">Sub-divisão</th>
                    <td>{{$class_information->subdivision}}</td>
                </tr>
                <tr>
                    <th scope="row">Semestre</th>
                    <td>{{$class_information->year}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection