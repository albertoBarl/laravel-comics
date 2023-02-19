@extends('layouts.app')

@section('content')
    <div id="comiclist">
        <div class="container d-flex justify-content-center flex-wrap gap-5">
            <section>
                <h3>current series</h3>
            </section>
            @foreach ($cards as $key => $card)
                <a href="{{ route('cardPage', ['id' => $key]) }}" class="text-decoration-none text-white">
                    <div class="card bg-transparent border-0" style="width: 175px">
                        <img src="{{ $card['thumb'] }}" class="card-img-top" alt="{{ $card['title'] }}">
                        <p class="card-title text-uppercase">{{ $card['title'] }}</p>
                    </div>
                </a>
            @endforeach
            <button>
                load more
            </button>
        </div>
    </div>
@endsection
