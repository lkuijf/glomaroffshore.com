<div class="hero @if(!$display_logo){{ 'smallerHero' }}@endif">
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
            @if ($display_logo)
                <img src="{{ asset('statics/glomar-offshore-logo-orangewhite.png') }}" alt="Glomar Offshore logo">
            @endif
        </div>
    </div>
    <div class="heroImages zoom">
        <div>
            @if (isset($images))
            @foreach ($images as $image)
                @if ($image['url'])<img src="{!! $image['url'] !!}" alt="{{ $image['alt'] }}">@endif
            @endforeach
            @endif
        </div>
    </div>
</div>
