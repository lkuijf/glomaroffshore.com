@if (isset($data['vessels']) && count($data['vessels']))
<div class="ourVesselsContent">
    <div class="inner">
        <h2>OUR <strong>VESSELS</strong></h2>
        <div class="vesselsPageWrap">
            @foreach ($data['vessels'] as $vessel)
                @include('sections.vessel_card', [
                    'small_image' => $vessel->small_image,
                    'title' => $vessel->title->rendered,
                    'type_text' => $vessel->type_text,
                    'class' => $vessel->class,
                    'length' => $vessel->length,
                    'breadth' => $vessel->breadth,
                    'slug' => $vessel->slug,
                    ])
            @endforeach
        </div>
    </div>
</div>
@endif