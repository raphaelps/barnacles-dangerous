

@extends('painel.template.template') <!-- chamar template -->
<!-- essa parte vai ser inserida no local do template onde esta o content -->
@section('content') <!-- abrir seção para uso -->

<h1 class="title-pg">Listagem de produtos</h1>

<a href="{{route('produtos.create')}}" class="btn btn-info btn-add">
    <i class="fas fa-plus"></i> Cadastrar
</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>nome</th>
            <th>descrição</th>
            <th width="100px">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $produto)
        <tr>
            <td>{{$produto->name}}</td>
            <td>{{$produto->description}}</td>
            <td>
<<<<<<< HEAD
                <a href="{{route('produtos.edit', $produto->id)}}" class=" actions edit">
=======
                <a href="" class=" actions edit">
>>>>>>> remotes/origin/master
                    <i class="fas fa-pencil-alt"></i>
                </a>
                <a href="" class="actions  delete">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection <!-- fecha seção em uso -->