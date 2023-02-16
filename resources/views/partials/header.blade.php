<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    @vite('resources/js/app.js')
</head>
<body>
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
        <div class="container">
            {{-- navabar --}}
            <nav class="d-flex">
                {{-- logo --}}
                <div>
                    <img src="{{ Vite::asset("resources/images/dc-logo.png") }}" alt="LOGO">
                </div>
                {{-- menu --}}
                <div>PROVA MENU</div>
                {{-- searchbar --}}
                <div>
                    <div class="form-control bg-transparent border-0">
                        <input type="text" name="search" placeholder="Search...">
                        <button class="btn btn-primary" type="submit">SEARCH</button>
                    </div>
                      
                </div>
            </nav>
        </div>
        {{-- jumbotron --}}
        <div></div>
    </div>
</body>
</html>