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
        @foreach ($product as $prod)
        <tr>
            <td>{{$prod->name}}</td>
            <td>{{$prod->description}}</td>
            <td>
                <a href="{{route('produtos.edit', $prod->id)}}" class="actions edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                <a href="{{route('produtos.show', $prod->id)}}" class="actions  delete">
                    <i class="fas fa-eye"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $product->links() !!}

@endsection <!-- fecha seção em uso -->