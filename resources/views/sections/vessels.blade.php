<div class="ourVesselsContent">
    <div class="inner">
        <h2>OUR <strong>VESSELS</strong></h2>

        <div class="outerSwiperBox">
            <div class="swiper ourVesselsSwiper">
                <div class="swiper-wrapper">
                    {{-- @for ($x=0;$x<15;$x++) --}}
                    @foreach ($vessels as $vess)
                    <div class="swiper-slide">
                        <article>
                            <img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt="">
                            <div>
                                <h3>{{ $vess->title }}</h3>
                                <p>DYNAMICALLY POSITIONED - SUBSEA/DIVING/ROV - SURVEY - WALK TO WORK</p>
                                <dl>
                                    <dt>Type</dt>
                                    <dd>{{ $vess->type_text }}</dd>
                                    <dt>Class</dt>
                                    <dd>{{ $vess->class }}</dd>
                                    <dt>Length</dt>
                                    <dd>{{ $vess->length }}</dd>
                                    <dt>Breadth</dt>
                                    <dd>{{ $vess->breadth }}</dd>
                                </dl>
                                <p><a href="">View all specs</a></p>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    {{-- @endfor --}}
                </div>
            </div>
            <div class="swiperBtn sb-next swiper-button-next-vessels"></div>
            <div class="swiperBtn sb-prev swiper-button-prev-vessels"></div>
            <div class="swiper-scrollbar"></div>
            <div class="swiper-pagination"></div>
        </div>

        <p><a href="{{ url('vessels') }}" class="btnWhiteBorder">BROWSE ALL OUR VESSELS</a></p>
    </div>
</div>
