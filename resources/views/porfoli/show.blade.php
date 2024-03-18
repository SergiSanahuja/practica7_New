@extends('layouts.app')



@section('title','Portafoli | ' . $article->title)



@section('content')
    <form action="{{route("editar",$article->id)}}" method="POST">
        @csrf
  

        <p style="text-align: center; font-size:50px">{{ $article->Titul }}</p>
       
        <input type="text" name="content" style="display: block; margin: 0 auto;" value="{{$article->descripcio}}">
        <button style="display:block; margin: 0 auto; margin-top:10px; border:none; border-radius:5px; color:white;padding:10px;background-color:rgb(77, 76, 75)" type="submit">
            Modificar
        </button>
    </form>
    {{-- <p>{{ $article->created_at->diffForHumans() }}</p> --}}
    {{-- <a href="{{ route('articles.edit', $article) }}">Editar</a> --}}
@endsection
