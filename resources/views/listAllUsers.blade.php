<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Listagem de usuarios</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td>#ID</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Ações</td>

                    </tr>
                    @foreach ($users as $user )

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td> {{ $user->email }}</td>
                        <td>
                            <a href="{{ route('user.show',['user' => $user->id]) }}">Ver Usuário</a>

                            <form action="{{ route('user.destroy',['user' =>$user->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                
                                <input type="submit" value="Remover">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </body>
</html>
