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


    {{-- <script>
        function initMap() {
            console.log('TESTTTT');
        }
    </script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCuS6wehXYuYS-EHMoWqo7dfBFzMowjDDA&callback=initMap" type="text/javascript"></script> --}}


    {{-- <script src="{{ asset('js/glider.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/glider.min.css') }}"> --}}
    
    
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @yield('after_body_tag')
    {{-- <div class="top @if(Route::currentRouteName() == 'home'){{ 'homepage' }}@endif">
    </div> --}}

    <header>
        <div class="topBar">
            <div class="inner">
                <div><a href="tel:+31223525030" class="topBarBtn_phone"><span>+31 223 525 030</span></a><a href="mailto:info@glomaroffshore.com" class="topBarBtn_email"><span>info@glomaroffshore.com</span></a></div>
                <div><a href="" class="topBarBtn_linkedin"><span>LinkedIn</span></a><a href="" class="topBarBtn_twitter"><span>Twitter</span></a></div>
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
                    {{-- <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li itemprop="name"><a itemprop="url" href="/">HOME</a></li>
                        <li itemprop="name"><a itemprop="url" href="/about">ABOUT</a></li>
                        <li itemprop="name"><a itemprop="url" href="/our-services">VESSELS</a></li>
                        <li itemprop="name"><a itemprop="url" href="/our-clients">QHSE</a></li>
                        <li itemprop="name"><a itemprop="url" href="/downloads">CONTACT</a></li>
                    </ul> --}}
                    {!! $data['html_menu'] !!}
                </nav>
            </div>
        </div>
    </header>




    <div class="contentWrapper">
        @yield('content')

        {{-- <div class="hero">
            <div class="heroOverlay">
                <p>Fleet of Offshore<br />Support Vessels</p>
                <img src="{{ asset('statics/glomar-offshore-logo-orangewhite.png') }}" alt="">
            </div>
            <div class="heroImages zoom">
                <div>
                    <img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt="">
                    <img src="{{ asset('statics/slideshow/Glomar-Wave.jpg') }}" alt="">
                    <img src="{{ asset('statics/slideshow/Glomar-Worker.jpg') }}" alt="">
                </div>
            </div>
        </div> --}}
    
    

        {{-- <div class="introTextContent">
            <div class="inner">

                @for ($x=0;$x<2;$x++)
                <div class="introTextWrap">
                    <img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt="">
                    <div>
                        <h2>GLOMAR // <strong>OFFSHORE</strong></h2>
                        <p>Glomar Offshore B.V. operates a diverse fleet of purpose built offshore support vessels, all of which are certified to the highest standard of health and safety. Our dedicated team of talented ship management professionals use a range of applicable quality management tools, guidelines and procedures, safeguarding operations both at sea and onshore.We are extremely proud of our ‘in house’ rebuilds and constructions located at our Globaltic Marine Shipyard in Poland.</p>
                    </div>
                    <div>
                        <a href="#" class="btnOrange">READ MORE</a>
                    </div>
                    <div>
                        <a href="#" class="btnTransparent">[p] +31 223 525 030</a>
                    </div>
                </div>
                @endfor

            </div>
        </div> --}}



        {{-- <div class="introTextContent gridBoxes">
            <div class="inner">

                @for ($x=0;$x<3;$x++)
                <div class="introTextWrap">
                    <div>
                        <h2>GLOMAR<br /><strong>NETHERLANDS</strong></h2>
                        <p class="contactIcon naw">Het Nieuwe Diep 34a3<br />
                            1781 AD Den Helder<br />
                            The Netherlands</p>
                        <p class="contactIcon phone"><a href="tel:+31223525030">+31 223 525 030</a></p>
                        <p class="contactIcon email"><a href="mailto:info@glomaroffshore.com">info@glomaroffshore.com</a></p>
                    </div>
                </div>
                @endfor

            </div>
        </div> --}}


        {{-- <div class="workingWithContent">
            <div class="inner">
                <h2><strong>WORKING</strong> WITH</h2>
                <div class="swiper partnerSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div> --}}


        {{-- <div class="statisticsContent">
            <div class="inner">
                <div class="outerSwiperBox">
                    <div class="swiper statsSwiper">
                        <div class="swiper-wrapper">
                            @for($x=0;$x<=6;$x++)
                            @php
                                //temporary filling
                                $icon = 'icon_world';
                                switch($x) {
                                    case 0: $icon = 'icon_world';break;
                                    case 1: $icon = 'icon_crew';break;
                                    case 2: $icon = 'icon_calendar';break;
                                    case 3: $icon = 'icon_thumb';break;
                                    case 4: $icon = 'icon_recycle';break;
                                    case 5: $icon = 'icon_wind';break;
                                    case 6: $icon = 'icon_building';break;
                                }
                            @endphp
                            <div class="swiper-slide">
                                <div class="statWrap">
                                    <div class="statIcon"><span class="f_icon {{ $icon }}"></span></div>
                                    <div class="statNumber">5.846</div>
                                    <div class="statHeadline">COMPLETED <strong>OFFSHORE TRANSFERS</strong></div>
                                    <div class="statSubline">And still counting!</div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="swiperBtn sb-next wiper-button-next-stats"></div>
                    <div class="swiperBtn sb-prev swiper-button-prev-stats"></div>
                </div>
            </div>
        </div> --}}


        {{-- <div class="professionalsContent">
            <div class="inner">
                <h2>OUR <strong>PROFESSIONALS</strong></h2>
                
                <div class="outerSwiperBox">
                    <div class="swiper professionalsSwiper">
                        <div class="swiper-wrapper">
                            @for ($x=0;$x<5;$x++)
                            <div class="swiper-slide">
                                <article>
                                    <div>
                                        <img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt="">
                                        <div>
                                            <h3>Dennis Beitema</h3>
                                            <p>CFO Glomar Group</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="swiperBtn sb-next swiper-button-next-prof"></div>
                    <div class="swiperBtn sb-prev swiper-button-prev-prof"></div>
                </div>

                <p><a href="" class="btnWhiteBorder">[M] JOIN OUR TEAM</a></p>

            </div>
        </div> --}}


        {{-- <div class="getInTouchContent">
            <div class="inner">
                <h2>GET IN <strong>TOUCH</strong></h2>
                <div class="socials">
                    <a href="" class="linkedIn"><span>LinkedIn</span></a>
                    <a href="" class="twitter"><span>Twitter</span></a>
                </div>
                <p><a href="" class="btnWhiteBorder">CONTACT</a></p>
            </div>
        </div> --}}


        <div class="mapsContent">
            {{-- <iframe width="100%" height="500" src="https://maps.google.com/maps?q=Korte%20Welleweg%201,%203218%20AZ%20Heenvliet&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> --}}
            {{-- <div id="myGlomarMap"></div> --}}
            {{-- <div id="myGlomarMap" style="width: 500px; height: 400px;"></div> --}}
        </div>


        {{-- <div class="ourVesselsContent">
            <div class="inner">
                <h2>OUR <strong>VESSELS</strong></h2>

                <div class="outerSwiperBox">
                    <div class="swiper ourVesselsSwiper">
                        <div class="swiper-wrapper">
                            @for ($x=0;$x<15;$x++)
                            <div class="swiper-slide">
                                <article>
                                    <img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt="">
                                    <div>
                                        <h3>GLOMAR SUPPORTER</h3>
                                        <p>DYNAMICALLY POSITIONED - SUBSEA/DIVING/ROV - SURVEY - WALK TO WORK</p>
                                        <dl>
                                            <dt>Type</dt>
                                            <dd>DSV/ROV/W2W VESSEL</dd>
                                            <dt>Class</dt>
                                            <dd>RINA</dd>
                                            <dt>Length</dt>
                                            <dd>60.00 m</dd>
                                            <dt>Breath</dt>
                                            <dd>15.60 m</dd>
                                        </dl>
                                        <p><a href="">View all specs</a></p>
                                    </div>
                                </article>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="swiperBtn sb-next swiper-button-next-vessels"></div>
                    <div class="swiperBtn sb-prev swiper-button-prev-vessels"></div>
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <p><a href="" class="btnWhiteBorder">BROWSE ALL OUR VESSELS</a></p>
            </div>
        </div> --}}
      

        {{-- <div class="newsContent">
            <div class="inner">
                <h2>LATEST <strong>NEWS</strong></h2>

                <div class="newsContainer">
                @for ($x=0;$x<3;$x++)
                    <article>
                        <img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt="">
                        <div>
                            <h3>GLOMAR PRIDE REACHES 10 YEARS LTI FREE</h3>
                            <p>Glomar Shipmanagement is pleased to report that our O&G UK Class B ERRV has been LTI free since her launch in 2011. Hendrik Mulder.</p>
                            <p><a href="">Read more</a></p>
                            <hr>
                            <p>29 NOVEMBER 2021</p>
                        </div>
                    </article>
                @endfor
                </div>

                <p><a href="" class="btnWhiteBorder">ALL NEWS</a></p>
            </div>
        </div> --}}
      

        
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
                        <h4>GLOMAR<br /><strong>NETHERLANDS</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div>
                        <h4>GLOMAR<br /><strong>NETHERLANDS</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div>
                        <h4>GLOMAR<br /><strong>NETHERLANDS</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div>
                        <h4>GLOMAR<br /><strong>NETHERLANDS</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
    
    @yield('before_closing_body_tag')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>