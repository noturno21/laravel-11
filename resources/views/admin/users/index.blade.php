@extends('admin.layouts.app')
@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>Usuários</h1>

    @if (@session()->has('sucess'))
        {{ session('sucess')}}
    @endif

    <a href="{{route('users.create')}}">Novo</a>

    <table>
        <thead>

            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>

            <tbody>
                @forelse ($users as $user )
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>-</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="1000">Nenhum usuário</td>
                    </tr>
                @endforelse
            </tbody>

        </thead>
    </table>
    {{ $users->links() }}

@endsection
