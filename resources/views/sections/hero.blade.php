<div class="hero">
    <div class="heroOverlay">
        <div class="inner">
            @if (isset($bigHeader) && $bigHeader)
                <h1 class="h1Big">{!! $bigHeader !!}</h1>
            @elseif(isset($smallHeader) && $smallHeader)
                <h1 class="h1Small">{!! $smallHeader !!}</h1>
            @endif
            @if (isset($text) && $text)
                <p>{!! $text !!}</p>
            @endif
            <img src="{{ asset('statics/glomar-offshore-logo-orangewhite.png') }}" alt="">
        </div>
    </div>
    <div class="heroImages zoom">
        <div>
            @if (isset($images))
            @foreach ($images as $image)
                <img src="{!! $image['url'] !!}" alt="{{ $image['alt'] }}">
            @endforeach
            @endif
        </div>
    </div>
</div>
