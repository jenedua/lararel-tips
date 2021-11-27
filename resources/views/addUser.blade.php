<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Cadastro de usuarios</title>
            </head>
            <body>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <label for="">Nome Usuario</label>
                    <input type="text" name="name">

                    <label for="">E-mail Usuario</label>
                    <input type="email" name="email">

                    <label for="">Senha Usuario</label>
                    <input type="password" name="password">

                    <input type="submit" value="Cadastrar usuario">
                </form>
            </body>
</html>
