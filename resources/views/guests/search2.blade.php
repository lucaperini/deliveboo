@extends('layouts.front')

@section('title')
    Cerca
@endsection

@section('content')
    @include ('partials.search')

    <div class="row py-5">
        <div class="col-12">
            <div class="container">
                <div class="my-grid">
                    @forelse ($usersArray as $user)
                        <a class="my-grid-element d-flex" href="/{{ $user->id }}">
                            <img src="{{ $user->immagine }}" alt="{{ $user->nome }}" />
                            <div class="info-restaurant p-4">
                                <span>
                                    @foreach ($user->types as $type)
                                        {{ ucFirst($type->nome) }}
                                    @endforeach
                                </span>

                                <h3 class="font-weight-bold">{{ $user->nome }}</h3>
                                <p class="text-secondary font-weight-light">
                                    {{ $user->indirizzo }}
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                    @empty
                        <h2>Nessun ristorante con questa tipologia</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/front-search.js') }}"></script>
@endsection
