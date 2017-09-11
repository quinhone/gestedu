@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <h3>Usuário - {{ $user->name }}</h3>

            {!! Button::normal('Listar Usuários')->appendIcon(Icon::thList())->asLinkTo(route('admin.users.index'))->addAttributes(['class' => 'hidden-print']) !!}

            <br><br>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="roe">#</th>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <th scope="roe">Nome</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th scope="roe">E-Mail</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th scope="roe">Password</th>
                    <td>{!! Badge::withContents($user->password) !!}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection