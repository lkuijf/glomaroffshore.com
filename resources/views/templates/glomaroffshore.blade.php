<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['head_title'] }}</title>
    <meta name="description" content="{{ $data['meta_description'] }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @yield('after_body_tag')

    <header>
        <div class="topBar">
            <div class="inner">
                <div><a href="tel:{{ $data['website_options']->phone_number }}" class="topBarBtn_phone"><span>{{ $data['website_options']->phone_number }}</span></a><a href="mailto:{{ $data['website_options']->email_address }}" class="topBarBtn_email"><span>{{ $data['website_options']->email_address }}</span></a></div>
                <div><a href="{{ $data['website_options']->linkedin }}" class="topBarBtn_linkedin"><span>LinkedIn</span></a><a href="{{ $data['website_options']->twitter }}" class="topBarBtn_twitter"><span>Twitter</span></a></div>
            </div>
        </div>
        <div class="logoNavWrap">
            <div class="inner">
                <img src="{{ asset('statics/glomar-offshore-logo.png') }}" alt="">
                <nav class="mainNav">
                    <input type="checkbox" id="burger-check">
                    <label for="burger-check" class="burger-label">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                    {!! $data['html_menu'] !!}
                </nav>
            </div>
        </div>
    </header>

    <div class="contentWrapper">
        @yield('content')
        @yield('vessels')
        @yield('news')
    </div>
    
    <footer>
        <div class="footer">
            <div class="innerFooter">
                <img src="{{ asset('statics/glomar-offshore-logo-white.png') }}" alt="">
                <div>
                    <div>
                        <h4><strong>MENU</strong></h4>
                        {!! $data['html_menu'] !!}
                    </div>
                    <div>
                        <h4>{!! $data['website_options']->footer_office_1[0]->country !!}</h4>
                        <p class="contactIcon naw">{{ $data['website_options']->footer_office_1[0]->address1 }}<br />
                            {{ $data['website_options']->footer_office_1[0]->address2 }}<br />
                            {{ $data['website_options']->footer_office_1[0]->address3 }}<br />
                            {{ $data['website_options']->footer_office_1[0]->address4 }}</p>
                        <p class="contactIcon phone"><a href="tel:{{ $data['website_options']->footer_office_1[0]->phone }}">{{ $data['website_options']->footer_office_1[0]->phone }}</a></p>
                        <p class="contactIcon email"><a href="mailto:{{ $data['website_options']->footer_office_1[0]->email }}">{{ $data['website_options']->footer_office_1[0]->email }}</a></p>
                    </div>
                    <div>
                        <h4>{!! $data['website_options']->footer_office_2[0]->country !!}</h4>
                        <p class="contactIcon naw">{{ $data['website_options']->footer_office_2[0]->address1 }}<br />
                            {{ $data['website_options']->footer_office_2[0]->address2 }}<br />
                            {{ $data['website_options']->footer_office_2[0]->address3 }}<br />
                            {{ $data['website_options']->footer_office_2[0]->address4 }}</p>
                        <p class="contactIcon phone"><a href="tel:{{ $data['website_options']->footer_office_2[0]->phone }}">{{ $data['website_options']->footer_office_2[0]->phone }}</a></p>
                        <p class="contactIcon email"><a href="mailto:{{ $data['website_options']->footer_office_2[0]->email }}">{{ $data['website_options']->footer_office_2[0]->email }}</a></p>
                    </div>
                    <div>
                        <h4>STAY <strong>UP-TO-DATE</strong><br />Subscribe to our newsletter</h4>
                        @include('snippets.subscription-form')
                    </div>
                    <div>
                        <h4>ACCREDITATIONS</strong></h4>
                        <img src="{{ asset('statics/glomar-accreditations.png') }}" alt="Accreditations Glomar Offshore">
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomBar">
            <div class="innerFooter">
                <div>&copy; <strong>GLOMAR</strong> // OFFSHORE</div>
                <div><a href="">General conditions</a></div>
            </div>
        </div>
    </footer>

    <a href="" id="toTop"></a>
    
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('before_closing_body_tag')
</body>
</html>