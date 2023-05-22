@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 18rem;">
                        <img src="https://thumbs.dreamstime.com/z/un-simple-gato-lindo-con-carta-de-amor-elemento-dise%C3%B1o-para-tarjeta-saludo-d%C3%ADa-san-valent%C3%ADn-cumplea%C3%B1os-libro-colorear-167118677.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Módulo de post</h5>
                          <p class="card-text">Crear publicaciones.</p>
                          <a href="#" class="btn btn-primary">Ir al módulo</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.freeimages.com/clg/istock/previews/9713/97137139-flashcard-letter-c-is-for-cat.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Módulo de categorías</h5>
                          <p class="card-text">Crear publicaciones.</p>
                          <a href="#" class="btn btn-primary">Ir al módulo</a>
                        </div>
                    </div>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
