<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Editar de usuarios</title>
            </head>
            <body>
                <form action="{{ route('users.edit',['user'=>$user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">Nome Usuario</label>
                    <input type="text" name="name" value="{{ $user->name }}">

                    <label for="">E-mail Usuario</label>
                    <input type="email" name="email" value="{{$user->email}}">

                    <label for="">Senha Usuario</label>
                    <input type="password" name="password">

                    <input type="submit" value="Editar usuario">
                </form>
            </body>
</html>
