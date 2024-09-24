<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receba</title>
</head>
<body>
    <header>
        <>eu nao sei </p>
    </header>

    <h1>Usuários</h1>

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

    <footer>
        <p>continuo não sabendo</p>
    </footer>
</body>
</html>
