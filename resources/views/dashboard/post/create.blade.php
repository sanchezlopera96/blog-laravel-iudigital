@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Creación de publicaciones</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('post.store') }}" method="POST">
            @include('dashboard.post._form')
        </form>
    </div>
@endsection
