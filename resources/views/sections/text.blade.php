<div class="introTextContent">
    <div class="inner">

        <div class="introTextWrap">
            @if($imageUrl)<img src="{!! $imageUrl !!}" alt="{{ $imageAlt }}">@endif
            <div>
                <h2>{!! $header !!}</h2>
                <p>{!! $text !!}</p>
            </div>
            @if($btn_orange_url && $btn_orange_text)
            <div>
                <a href="{!! $btn_orange_url !!}" class="btnOrange">{{ $btn_orange_text }}</a>
            </div>
            @endif
            @if($btn_transparent_url && $btn_transparent_text)
            <div>
                <a href="{!! $btn_transparent_url !!}" class="btnTransparent">{{ $btn_transparent_text }}</a>
            </div>
            @endif
        </div>

        @if ($header_2 && $text_2)
        <div class="introTextWrap">
            @if($imageUrl_2)<img src="{!! $imageUrl_2 !!}" alt="{{ $imageAlt_2 }}">@endif
            <div>
                <h2>{!! $header_2 !!}</h2>
                <p>{!! $text_2 !!}</p>
            </div>
            @if($btn_orange_url_2 && $btn_orange_text_2)
            <div>
                <a href="{!! $btn_orange_url_2 !!}" class="btnOrange">{{ $btn_orange_text_2 }}</a>
            </div>
            @endif
            @if($btn_transparent_url_2 && $btn_transparent_text_2)
            <div>
                <a href="{!! $btn_transparent_url_2 !!}" class="btnTransparent">{{ $btn_transparent_text_2 }}</a>
            </div>
            @endif
        </div>
        @endif

    </div>
</div>
