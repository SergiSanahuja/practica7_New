@extends('layouts.app')



@section('title','Portafoli | ' . $article->title)



@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    
    
    <
    <form action="{{route("editar",$article->id)}}" method="POST">
        @csrf
  
        <p style="text-align: center; font-size:50px">{{ $article->Titul }}</p>
       
        <input type="text" name="content" style="display: block; margin: 0 auto;" value="{{$article->descripcio}}">
        <button style="display:block; margin: 0 auto; margin-top:10px; border:none; border-radius:5px; color:white;padding:10px;background-color:rgb(77, 76, 75)" type="submit">
            Modificar
        </button>

        <button>
            <a href="{{ route('Eliminar',$article->id) }}" >Eliminar</a>
        </button>
      
    </form>
    {{-- <p>{{ $article->created_at->diffForHumans() }}</p> --}}
    {{-- <a href="{{ route('articles.edit', $article) }}">Editar</a> --}}
@endsection
