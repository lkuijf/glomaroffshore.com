<article>
    @if($small_image[0]['url'])<img src="{!! $small_image[0]['url'] !!}" alt="{{ $small_image[0]['alt'] }}">@endif
    <div>
        <div>
            <h3>{{ $title }}</h3>
            <p>DYNAMICALLY POSITIONED - SUBSEA/DIVING/ROV - SURVEY - WALK TO WORK</p>
            <dl>
                <dt>Type</dt>
                <dd>{{ $type_text }}</dd>
                <dt>Class</dt>
                <dd>{{ $class }}</dd>
                <dt>Length</dt>
                <dd>{{ $length }}</dd>
                <dt>Breadth</dt>
                <dd>{{ $breadth }}</dd>
            </dl>
        </div>
        <div>
            <p><a href="{{ url('vessels') }}/{{ $slug }}">View all specs</a></p>
        </div>
    </div>
</article>
