<div class="professionalsContent">
    <div class="inner">
        <h2>OUR <strong>PROFESSIONALS</strong></h2>
        
        <div class="outerSwiperBox">
            <div class="swiper professionalsSwiper">
                <div class="swiper-wrapper">
                    {{-- @for ($x=0;$x<5;$x++) --}}
                    @foreach ($professionals as $prof)
                    <div class="swiper-slide">
                        <article>
                            <div>
                                @if ($prof->image[0]['url'])<img src="{!! $prof->image[0]['url'] !!}" alt="{{ $prof->image[0]['alt'] }}">@endif
                                <div>
                                    <h3>{{ $prof->title }}</h3>
                                    <p>{{ $prof->function }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    {{-- @endfor --}}
                </div>
            </div>
            <div class="swiperBtn sb-next swiper-button-next-prof"></div>
            <div class="swiperBtn sb-prev swiper-button-prev-prof"></div>
        </div>

        <p><a href="" class="ctaBtn btnWhiteBorder">JOIN OUR TEAM</a></p>

    </div>
</div>
