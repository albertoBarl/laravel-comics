<?php
$foothead = [
    [
        'logo' => 'buy-comics-digital-comics.png',
        'label' => 'digital comics',
    ],
    [
        'logo' => 'buy-comics-merchandise.png',
        'label' => 'dc merchandise',
    ],
    [
        'logo' => 'buy-comics-subscriptions.png',
        'label' => 'subscription',
    ],
    [
        'logo' => 'buy-comics-shop-locator.png',
        'label' => 'comic shop locator',
    ],
    [
        'logo' => 'buy-dc-power-visa.svg',
        'label' => 'dc power visa',
    ],
];
$sections = [
    [
        'label' => 'dc comics',
        'links' => 'Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News',
    ],
    [
        'label' => 'shop',
        'links:' => 'Shop DC', 'Shop DC Collectibles',
    ],
    [
        'label' => 'dc',
        'links' => 'Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us',
    ],
    [
        'label' => 'sites',
        'links' => 'DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footer</title>
    @vite('resources/js/app.js')
</head>

<body>
    <!-- blue section -->
    <header class="pre-header">
        <div class="container">
            <div class="d-flex justify-content-between pt-3" style="width: 100%; height: 100%">
                @foreach($foothead as $item)
                <div class="d-flex align-items-center">
                    <img src=" {{ Vite::asset("resources/images/{$item['logo']}") }}" alt="not available" />
                    <span class="ms-2"><a href="#"> {{ $item["label"] }}</a></span>
                </div>
                @endforeach
            </div>
        </div>
    </header>
    <!-- nav footer -->
    <footer class="d-flex justify-content-around">
        <div class="d-flex flex-column flex-wrap">
            @foreach($sections as $section)
            <div class="my-3">
                <h4>{{ $section["label"] }}</h4>
                <ul>
                    @foreach($section as $key["links"])
                        <a href="/">{{$key["links"]}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="dx">
            <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="not available" />
        </div>
    </footer>
    <div class="deepbottom" style="height: 100px">
        <div class="container" style="height: 100%">
            <div class="row d-flex align-items-center" style="height: 100%">
                <div class="col-6"><button class="mybtn">SIGN-UP NOW</button></div>
                <div class="col-6 d-flex align-items-center py-3" style="height: 100%">
                    <h4 class="me-4">FOLLOW US</h4>
                    <div class="mx-2 pb-1">
                        @foreach($socials as $social)
                        <a href="#">
                            <img src="{{ Vite::asset("resources/images/{$social['logo']}") }}" alt="not available"
                                style="height: 100%" />
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



