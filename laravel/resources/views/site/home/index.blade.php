@extends('site.templates.template1')

@section('content')

@include('site.include.sidebar')

<h1>Home Page do site!</h1>

{{$testee or 'nada a declarar'}}

@if($var1 == '123')

<p>É igual</p>

@else

<p>É diferente</p>

@endif

@unless ($var1 == 312)

    <p>É diferente --- unless</p>

@endunless
{{-- comentario
@if(count($arrayData)>0)
    @foreach($arrayData as $array)

        <p>Foreach: {{$array}}</p>

    @endforeach
@else
    <p>Não ha dados para serem impressos</p>
@endif
comentario --}}
@forelse($arrayData as $array)

<p>Forelse: {{$array}}</p>
@empty 
    <p>Não ha dados para serem impressos</p>
@endforelse

@endsection 