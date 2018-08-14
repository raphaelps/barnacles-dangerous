@extends('painel.template.template') <!-- chamar template -->

@section('content') <!-- abrir seção para uso -->


<h1 class="title-pg"><a href="{{route('produtos.index')}}"><i class="fas fa-backward"></i></a> Produto: <b>{{$product->name}}</b></h1>



<p><b>Nome: </b>{{$product->name}} </p>
<p><b>Numero: </b>{{$product->number}} </p>
<p><b>Ativo: </b>{{$product->active}} </p>
<p><b>Categoria: </b>{{$product->category}} </p>
<p><b>Descrição: </b>{{$product->description}} </p>
<hr>
@if(isset($errors)&&count($errors) > 0)

    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif   
{!! Form::open([route('produtos.destroy', $product->id), 'method' => 'DELETE'])!!}
    {!! Form::submit("Deletar Produto: $product->name", ['class' => 'btn btn-danger']) !!}
{!! Form::close()!!}
@endsection 