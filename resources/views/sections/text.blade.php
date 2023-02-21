<div class="introTextContent">
    <div class="inner">

        <div class="introTextWrap">
            @if($imageUrl)<img src="{!! $imageUrl !!}" alt="{{ $imageAlt }}">@endif
            <div>
                <h2>{!! $header !!}</h2>
                {!! $text !!}
            </div>
            @if (isset($buttons) && count($buttons))
            <div class="textBtnsWrap">
                @foreach ($buttons as $btn)
                    <a href="{!! $btn->url !!}"
                        class="ctaBtn
                        @if($btn->color == 'full_orange'){{ ' btnOrange' }}@endif
                        @if($btn->color == 'orange_border'){{ ' btnWhiteBorder' }}@endif
                        @if($btn->color == 'transparent'){{ ' btnTransparent' }}@endif
                        @if($btn->icon == 'icon_phone'){{ ' btnIconPhone' }}@endif
                        @if($btn->icon == 'icon_external_link'){{ ' btnIconExternal' }}@endif
                        "
                        @if($btn->target == 'new_tab'){!! ' target="_blank"' !!}@endif
                    >{!! $btn->text !!}</a>
                @endforeach
            </div>
            @endif
        </div>

        @if ($header_2 && $text_2)
        <div class="introTextWrap">
            @if($imageUrl_2)<img src="{!! $imageUrl_2 !!}" alt="{{ $imageAlt_2 }}">@endif
            <div>
                <h2>{!! $header_2 !!}</h2>
                {!! $text_2 !!}
            </div>
            @if (isset($buttons_2) && count($buttons_2))
            <div class="textBtnsWrap">
                @foreach ($buttons_2 as $btn)
                    <a href="{!! $btn->url !!}"
                        class="ctaBtn
                        @if($btn->color == 'full_orange'){{ ' btnOrange' }}@endif
                        @if($btn->color == 'orange_border'){{ ' btnWhiteBorder' }}@endif
                        @if($btn->color == 'transparent'){{ ' btnTransparent' }}@endif
                        @if($btn->icon == 'icon_phone'){{ ' btnIconPhone' }}@endif
                        @if($btn->icon == 'icon_external_link'){{ ' btnIconExternal' }}@endif
                        "
                        @if($btn->target == 'new_tab'){!! ' target="_blank"' !!}@endif
                    >{!! $btn->text !!}</a>
                @endforeach
            </div>
            @endif
        </div>
        @endif

    </div>
</div>
