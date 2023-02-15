<div class="newsContent">
    <div class="inner">
        <h2>LATEST <strong>NEWS</strong></h2>

        <div class="newsContainer">
        {{-- @for ($x=0;$x<3;$x++) --}}
        @php $t = 0; @endphp
        @foreach ($news as $newsItem)
            @php $t++; @endphp
            <article>
                @if($newsItem->small_image[0]['url'])<img src="{!! $newsItem->small_image[0]['url'] !!}" alt="{{ $newsItem->small_image[0]['alt'] }}">@endif
                <div>
                    <h3>{{ $newsItem->title }}</h3>
                    <p>{{ $newsItem->card_text }}</p>
                    <p><a href="">Read more</a></p>
                    <hr>
                    <p>29 NOVEMBER 2021</p>
                </div>
            </article>
            @php if($t==3)break; @endphp
        @endforeach
        {{-- @endfor --}}
        </div>

        <p><a href="{{ url('news') }}" class="btnWhiteBorder">ALL NEWS</a></p>
    </div>
</div>
