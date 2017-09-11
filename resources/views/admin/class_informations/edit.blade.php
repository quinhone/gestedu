@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">]
                <div class="col-md-12">
                    <h3>Editar Turma</h3>
                    {!!
                        form($form->add('Editar','submit', [
                            'attr' => ['class' => 'btn btn-success btn-block'],
                            'label' => Icon::ok().' Salvar'
                        ]))
                    !!}
                </div>
        </div>
    </div>
@endsection