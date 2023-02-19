<div id="footer">
    {{-- voices --}}
    <div id="voices">
        <div class="container">
            <div class="voicesSect">
                @foreach ($sections as $section)
                    <div class="singleVoice">
                        <h4>{{ $section['label'] }}</h4>
                        <ul class="list-unstyled">
                            @foreach ($section['links'] as $item)
                                <li><a href="." class="text-decoration-none text-white">{{ $item }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="rightsSect">All Site Content TM and C 2020 DC Entertainment, unless otherwise noted here.
                All
                rights reserved. <br>Cookies Settings</div>

        </div>
    </div>

    {{-- depp-footer --}}
    <div>
        <div class="container">
            <div>
                <div>
                    <button>SIGN-UP NOW!</button>
                </div>
                <div class="d-flex align-items-center justify-content-end gap-3">
                    <p>FOLLOW US</p>
                    <div class="d-flex align-items-center gap-2">
                        @foreach ($socials as $item)
                            <a href="/">
                                <div><img src="{{ Vite::asset("resources/images/{$item['logo']}") }}"
                                        alt="{{ $item['name'] }}"></div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
