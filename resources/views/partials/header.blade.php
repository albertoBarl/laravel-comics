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
                        @foreach ($menu as $item)
                            <li><a class="text-black" href="{{ $item['url'] }}">{{ $item['voice'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- searchbar --}}
                <div id="searchbar">
                    <div class="d-flex form-control bg-transparent">
                        <input type="text" name="search" placeholder="Search..." class="border-0">
                        <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </nav>
        </div>

        {{-- jumbotron --}}
        <div class="jumbotron">
            <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="not available">
        </div>
    </div>
</div>
