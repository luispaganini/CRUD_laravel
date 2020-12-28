<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>#ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Ações</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('user.show', ['user' => $user->id])}}">Ver usuario</a>
                    <form action="{{route('user.destroy', ['user' => $user->id])}}" method="post">
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