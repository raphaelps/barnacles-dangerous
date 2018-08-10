<h1>Listagem de produtos</h1>

listando os produtos do banco de dados
<table border="1">
    <thead>
        <tr>
            <th>nome</th>
            <th>descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $produto)
        <tr>
            <td>{{$produto->name}}</td>
            <td>{{$produto->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
