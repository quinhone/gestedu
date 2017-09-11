@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar meu perfil de Usuário</h3>
            {!!
                form($form->add('Salvar','submit', [
                    'attr' => ['class' => 'btn btn-success btn-block'],
                    'label' => Icon::ok().' Salvar'
                ]))
            !!}
        </div>
    </div>
@endsection