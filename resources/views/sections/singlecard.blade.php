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
                <div class="row justify-content-center">

                    {{-- description --}}
                    <div class="col-7">
                        {{-- title --}}
                        <h3>{{ $singleCard['title'] }}</h3>

                        {{-- price --}}
                        <div class="form-control d-flex justify-content-between my-3">
                            <div class="tprice d-flex justify-content-between align-items-center w-100 px-3">
                                <span>U.S. Price: <span class="text-white">{{ $singleCard['price'] }}</span></span>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="dropdown">
                                <button class="btn border-0 dropdown-toggle text-white" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Check Availability
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Option n</a></li>
                                    <li><a class="dropdown-item" href="#">Option n</a></li>
                                    <li><a class="dropdown-item" href="#">Option n</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- description --}}
                        <p>{{ $singleCard['description'] }}</p>
                    </div>

                    {{-- adv --}}
                    <div class="col-4">
                        <label>ADVERTISEMENT</label>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="ADV">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div id="sect3">
            <div class="container py-5">
                <div class="row justify-content-center">
                    {{-- talent --}}
                    <div class="col-6">
                        <h5>Talent</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Art by:</th>
                                    <td>
                                        @foreach ($singleCard['artists'] as $item)
                                            <a href="/">{{ $item }}</a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Written by:</th>
                                    <td>
                                        @foreach ($singleCard['writers'] as $item)
                                            <a href="/">{{ $item }}</a>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- specs --}}
                    <div class="col-6">
                        <h5>Specs</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Series:</th>
                                    <td>{{ $singleCard['series'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">U.S. Price:</th>
                                    <td>{{ $singleCard['price'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">On Sales Date:</th>
                                    <td>{{ $singleCard['sale_date'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-3">
                @foreach ($footcard as $item)
                    <a href="/">
                        <div class="d-flex gap-3">
                            <p class="text-uppercase" style="color: grey">{{ $item['label'] }}</p>
                            <div>
                                <img src="{{ Vite::asset("resources/images/{$item['logo']}") }}" alt="not available"
                                    style="width:50px; filter:brightness(0.5)">
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
