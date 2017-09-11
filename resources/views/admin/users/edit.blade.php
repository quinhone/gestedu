@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">]
            @component('admin.users.tabs-component', ['user' => $form->getModel()])
                <div class="col-md-12">
                    <h3>Editar Usuário</h3>
                    {!!
                        form($form->add('Editar','submit', [
                            'attr' => ['class' => 'btn btn-success btn-block'],
                            'label' => Icon::ok().' Salvar'
                        ]))
                    !!}
                </div>
            @endcomponent

        </div>
    </div>
@endsection