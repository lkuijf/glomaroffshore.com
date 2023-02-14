<div class="introTextContent">
    <div class="inner">

        {{-- @for ($x=0;$x<2;$x++) --}}
        <div class="introTextWrap">
            <img src="{{ asset('statics/slideshow/Glomar-Avior.jpg') }}" alt="">
            <div>
                <h2>{!! $header !!}</h2>
                <p>{!! $text !!}</p>
            </div>
            <div>
                <a href="{!! $btn_orange_url !!}" class="btnOrange">{{ $btn_orange_text }}</a>
            </div>
            <div>
                <a href="#" class="btnTransparent">[p] +31 223 525 030</a>
            </div>
        </div>
        {{-- @endfor --}}

    </div>
</div>
