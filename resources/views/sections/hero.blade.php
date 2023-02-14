<div class="hero">
    <div class="heroOverlay">
        <div class="inner">
            @if ($bigHeader)
                <h1 class="h1Big">{{ $bigHeader }}</h1>
            @elseif($smallHeader)
                <h1 class="h1Small">{{ $smallHeader }}</h1>
            @endif
            @if ($text)
                <p>{!! $text !!}</p>
            @endif
            <img src="{{ asset('statics/glomar-offshore-logo-orangewhite.png') }}" alt="">
        </div>
    </div>
    <div class="heroImages zoom">
        <div>
            @foreach ($images as $image)
                <img src="{!! $image['url'] !!}" alt="{{ $image['alt'] }}">
            @endforeach
        </div>
    </div>
</div>
