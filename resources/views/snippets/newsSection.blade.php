@if (isset($data['news']) && count($data['news']))
<div class="newsContent">
    <div class="inner">
        <h2>ALL <strong>NEWS</strong></h2>
        <div class="newsContainer">
                @foreach ($data['news'] as $news)
                {{-- @for ($x=0;$x<15;$x++) --}}
                    @include('sections.news_card', [
                        'small_image' => $news->small_image,
                        'title' => $news->title->rendered,
                        'card_text' => $news->card_text,
                        'date' => $news->date,
                        'slug' => $news->slug,
                        ])
                {{-- @endfor --}}
                @endforeach
        </div>
    </div>
</div>
@endif
