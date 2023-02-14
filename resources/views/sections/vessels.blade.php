<div class="ourVesselsContent">
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
</div>
