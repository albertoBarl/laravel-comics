<?php
$sections = [
    [
        'label' => 'dc comics',
        'links' => 'Characters',
        'Comics',
        'Movies',
        'TV',
        'Games',
        'Videos',
        'News',
    ],
    [
        'label' => 'shop',
        'links:' => 'Shop DC',
        'Shop DC Collectibles',
    ],
    [
        'label' => 'dc',
        'links' => 'Terms Of Use',
        'Privacy policy (New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us',
    ],
    [
        'label' => 'sites',
        'links' => 'DC',
        'MAD Magazine',
        'DC Kids',
        'DC Universe',
        'DC Power Visa',
    ],
];
$socials = [
    [
        'name' => 'Facebook',
        'logo' => 'footer-facebook.png',
    ],
    [
        'name' => 'Twitter',
        'logo' => 'footer-twitter.png',
    ],
    [
        'name' => 'YouTube',
        'logo' => 'footer-youtube.png',
    ],
    [
        'name' => 'Pinterest',
        'logo' => 'footer-pinterest.png',
    ],
    [
        'name' => 'Periscope',
        'logo' => 'footer-periscope.png',
    ],
];
?>

<div id="footer">
    {{-- voices --}}
    <div id="voices">
        <div class="container">
            <div class="voicesSect">
                @foreach ($sections as $section)
                    <div class="singleVoice">
                        <h4>{{ $section['label'] }}</h4>
                        <ul class="list-unstyled">
                            @foreach ($section as $item)
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
            <div class="row">
                <div class="col-6">
                    <button>SIGN-UP NOW!</button>
                </div>
                <div class="d-flex col-6 justify-content-end">
                    <p>FOLLOW US</p>
                    <a href=".">
                        <div><i class="">prova</i></div>
                    </a>
                    <a href=".">
                        <div><i class="">prova</i></div>
                    </a>
                    <a href=".">
                        <div><i class="">prova</i></div>
                    </a>
                    <a href=".">
                        <div><i class="">prova</i></div>
                    </a>
                    <a href=".">
                        <div><i class="">prova</i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
