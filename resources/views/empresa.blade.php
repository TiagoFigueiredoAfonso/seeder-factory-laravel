<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h3>Listagem criada com Seeder do Laravel</h3>
    <table border="1" width="100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $dado)
            <tr>
                <td>{{$dado->id}}</td>
                <td>{{$dado->nome}}</td>
                <td>{{$dado->endereco}}</td>
                <td>{{$dado->estado}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h3>Lista criada com Factory</h3>
    <a href="/aluno">Clique aqui</a>
</body>
</html>