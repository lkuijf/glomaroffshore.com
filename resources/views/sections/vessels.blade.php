<div class="ourVesselsContent">
    <div class="inner">
        <h2>OUR <strong>VESSELS</strong></h2>

        <div class="outerSwiperBox">
            <div class="swiper ourVesselsSwiper">
                <div class="swiper-wrapper">
                    {{-- @for ($x=0;$x<15;$x++) --}}
                    @foreach ($vessels as $vess)
                    <div class="swiper-slide">
                        @include('sections.vessel_card', [
                            'small_image' => $vess->small_image,
                            'title' => $vess->title,
                            'type_text' => $vess->type_text,
                            'class' => $vess->class,
                            'length' => $vess->length,
                            'breadth' => $vess->breadth,
                            'slug' => $vess->slug,
                            ])
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
