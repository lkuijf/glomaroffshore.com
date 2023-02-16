@extends('templates.glomaroffshore')
@section('content')
@include('sections.hero', [
    'images' => $data['vessel']->large_image,
    'bigHeader' => $data['vessel']->title->rendered,
    ])
@if ($data['vessel']->type_text)
<div class="newsDetailPageTextWrap">
    <div class="inner">
        <p>{!! $data['vessel']->type_text !!}</p>
    </div>
</div>
@endif
@endsection