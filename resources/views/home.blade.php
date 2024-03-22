@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Articles') }}</div>

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif              

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                {{-- agafar els articles qeu tenen la id del usuari actual --}}
                <div class="card-body">
                    <h2>All articles</h2>
                    <ul>
                        @foreach ($articles as $article)
                            <li>
                                <a href="{{ route('home.show', $article->id) }}">{{ $article->Titul }}: {{$article->descripcio}}</a>
                                {{-- {{$article->descripcio}} --}}  
                            </li>
                        @endforeach


                    </ul>
                    <section class="Paginacio">
                        <ul>
                            
                                {{$articles->links()}}
                            
                        </ul>

                    </section>
                
            </div>
        </div>
    </div>
</div>
@endsection
