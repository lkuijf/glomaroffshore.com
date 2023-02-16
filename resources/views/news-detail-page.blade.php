@extends('templates.glomaroffshore')
@section('content')
@include('sections.hero', [
    'images' => $data['newsItem']->large_image,
    'bigHeader' => $data['newsItem']->title->rendered,
    'display_logo' => false,
    ])
@if ($data['newsItem']->text)
<div class="newsDetailPageTextWrap">
    <div class="inner">
        {!! $data['newsItem']->text !!}
        <p class="clearer"></p> {{-- images can be alignd (floated) to right or left --}}
    </div>
</div>
@endif
@endsection