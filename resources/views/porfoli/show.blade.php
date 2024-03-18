@extends('layouts.app')



@section('title','Portafoli | ' . $article->title)



@section('content')
    
    <p style="text-align: center; font-size:50px">{{ $article->descripcio }}</p>
    <input type="text" style="display: block; margin: 0 auto;" value="{{$article->descripcio}}">
    <button>
        
    </button>
    {{-- <p>{{ $article->created_at->diffForHumans() }}</p> --}}
    {{-- <a href="{{ route('articles.edit', $article) }}">Editar</a> --}}
@endsection
