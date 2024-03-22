@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Perfil</h1>
        </div>
        <div class="row">
            <div class="col ">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('profile') }}" method="POST">
                    @csrf
                    <div class="form-group
                    ">
                        <label for="name" >Name</label>
                        <input type="text" value="{{ Auth::user()->name }}" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group
                    ">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group mb-2
                    ">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

