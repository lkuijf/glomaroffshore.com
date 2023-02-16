<div class="newsContent">
    <div class="inner">
        <h2>LATEST <strong>NEWS</strong></h2>

        <div class="newsContainer">
        @php $t = 0; @endphp
        @foreach ($news as $newsItem)
            @php $t++; @endphp
            @include('sections.news_card', [
                'small_image' => $newsItem->small_image,
                'title' => $newsItem->title,
                'card_text' => $newsItem->card_text,
                'date' => $newsItem->date,
                'slug' => $newsItem->slug,
                ])
            @php if($t==3)break; @endphp
        @endforeach
        </div>

        <p><a href="{{ url('news') }}" class="ctaBtn btnWhiteBorder">ALL NEWS</a></p>
    </div>
</div>
