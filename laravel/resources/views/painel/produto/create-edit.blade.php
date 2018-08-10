@extends('painel.template.template') <!-- chamar template -->

@section('content') <!-- abrir seção para uso -->

<h1 class="title-pg">Gestão de produtos</h1>

@if(isset($errors)&&count($errors) > 0)

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif 
@if(isset($product))
    <form class="form" method="post" action="{{route('produtos.update',$product->id)}}">
        {!! method_field('PUT') !!}
@else
    <form class="form" method="post" action="{{route('produtos.store')}}">
@endif

        {!!csrf_field()!!}
        <div class="form-group">
          {!! Form::text('name', null, ['class'=>'form_control', 'placeholder'=>'Nome'])!!}            
        </div>
        <div class="form-group">
           {!! Form::checkbox('active')!!}
            
        </div>
        <div class="form-group">
          {!! Form::text('number', null, ['class'=>'form_control', 'placeholder'=>'Numero'])!!}            
        </div>

        <div class="form-group">
            
            {!! Form::select('category',$category,null, ['class'=>'form_control'])!!}
            
        </div>
        <div class="form-group">
            {!! Form::textarea('description', null, ['class'=>'form_control', 'placeholder'=>'Descrição'])!!}
             
        </div>
        {!! Form::submit('Enviar',['class' => 'btn btn-primary'])!!}
    </form>

    @endsection