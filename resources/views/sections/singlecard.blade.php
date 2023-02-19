@extends('layouts.app')

@section('content')
    <div id="singleCard">
        <div id="sect1">
            <div class="container">
                <img class="card" src="{{ $singleCard['thumb'] }} " style="width: 200px">
            </div>
        </div>
        <div id="sect2">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-6">
                        <h3>{{ $singleCard['title'] }}</h3>
                    </div>
                    <div class="col-6">
                        <label>ADVERTISEMENT</label>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="ADV">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div id="sect3">
            <div class="container">
                PROVA SECT 3
            </div>
        </div>
    </div>
@endsection
