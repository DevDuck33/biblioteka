@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('author.create') }}">Dodaj autora</a>
                    <a href="{{ route('type.create') }}">Dodaj kategorię</a>
                    <a href="{{ route('book.create') }}">Dodaj książkę</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
