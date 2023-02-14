<div class="statisticsContent">
    <div class="inner">
        <div class="outerSwiperBox">
            <div class="swiper statsSwiper">
                <div class="swiper-wrapper">
                    {{-- @for($x=0;$x<=6;$x++)
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
                    @endphp --}}
                    @foreach ($statistics as $stat)
                    <div class="swiper-slide">
                        <div class="statWrap">
                            <div class="statIcon"><span class="f_icon {{ $stat->icon }}"></span></div>
                            <div class="statNumber">{{ $stat->number }}</div>
                            <div class="statHeadline">{!! $stat->headline !!}</div>
                            <div class="statSubline">{!! $stat->subline !!}</div>
                        </div>
                    </div>
                    @endforeach
                    {{-- @endfor --}}
                </div>
            </div>
            <div class="swiperBtn sb-next swiper-button-next-stats"></div>
            <div class="swiperBtn sb-prev swiper-button-prev-stats"></div>
        </div>
    </div>
</div>
