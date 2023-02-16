<article>
    @if($small_image[0]['url'])<img src="{!! $small_image[0]['url'] !!}" alt="{{ $small_image[0]['alt'] }}">@endif
    <div>
        <h3>{{ $title }}</h3>
        <p>{{ $card_text }}</p>
        <p><a href="{{ url('news') }}/{{ $slug }}">Read more</a></p>
        <hr>
        <p>{{ date('d-m-Y', strtotime($date)) }}</p>
    </div>
</article>
