<?php
$menu = [
    [
        'voice' => 'CHARACTERS',
        'url' => '#',
    ],
    [
        'voice' => 'COMICS',
        'url' => '#',
    ],
    [
        'voice' => 'MOVIES',
        'url' => '#',
    ],
    [
        'voice' => 'TV',
        'url' => '#',
    ],
    [
        'voice' => 'GAMES',
        'url' => '#',
    ],
    [
        'voice' => 'COLLECTIBLES',
        'url' => '#',
    ],
    [
        'voice' => 'VIDEOS',
        'url' => '#',
    ],
    [
        'voice' => 'FANS',
        'url' => '#',
    ],
    [
        'voice' => 'NEWS',
        'url' => '#',
    ],
    [
        'voice' => 'SHOP',
        'url' => '#',
    ],
];

?>

<div id="header">
    {{-- PRE-HEADER --}}
    <div class="pre-header">
        <div class="container d-flex justify-content-end gap-3 text-white">
            <p>DC POWER VISA</p>
            <div class="dropdown">
                <p class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ADDITION DC SITES
                </p>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Option n</a></li>
                    <li><a class="dropdown-item" href="#">Option n</a></li>
                    <li><a class="dropdown-item" href="#">Option n</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- HEADER --}}
    <div>
        <div class="container p-4">
            {{-- navabar --}}
            <nav class="d-flex justify-content-between align-items-center">

                {{-- logo --}}
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="LOGO">
                    </a>
                </div>

                {{-- menu --}}
                <div class="px-5 d-flex align-items-center">
                    <ul class="d-flex list-unstyled gap-3 align-items-center">
                        @foreach ($menu as $key => $value)
                            <li><a class="text-decoration-none text-black"
                                    href="{{ $value['url'] }}">{{ $value['voice'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- searchbar --}}
                <div>
                    <div class="d-flex form-control bg-transparent border-0">
                        <input type="text" name="search" placeholder="Search...">
                        <button class="btn btn-primary" type="submit">SEARCH</button>
                    </div>

                </div>
            </nav>
        </div>

        {{-- jumbotron --}}
        <div class="jumbotron" style="background-image: url( {{ Vite::asset('resources/images/jumbotron.jpg') }} );">
        </div>
    </div>
</div>
