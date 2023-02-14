@foreach ($data['content_sections'] as $section)

    @if($section->_type == 'hero')
        @include('sections.hero', [
            'images' => $section->crb_media_gallery,
            'bigHeader' => $section->big_header,
            'smallHeader' => $section->small_header,
            'text' => $section->text,
            ])
    @endif
    @if($section->_type == 'text')
        @include('sections.text', [
            'header' => $section->header,
            'text' => $section->text,
            'btn_orange_text' => $section->btn_orange_text,
            'btn_orange_url' => $section->btn_orange_url,
            'btn_transparent_text' => $section->btn_transparent_text,
            'btn_transparent_url' => $section->btn_transparent_url,
            'imageUrl' => $section->image[0]['url'],
            'imageAlt' => $section->image[0]['alt'],
            'header_2' => $section->header_2,
            'text_2' => $section->text_2,
            'btn_orange_text_2' => $section->btn_orange_text_2,
            'btn_orange_url_2' => $section->btn_orange_url_2,
            'btn_transparent_text_2' => $section->btn_transparent_text_2,
            'btn_transparent_url_2' => $section->btn_transparent_url_2,
            'imageUrl_2' => $section->image_2[0]['url'],
            'imageAlt_2' => $section->image_2[0]['alt'],
            ])
    @endif
    @if($section->_type == 'office_boxes')
    <div class="introTextContent gridBoxes">
        <div class="inner">
            @foreach ($section->office_associations as $office)
                @include('sections.text_office_boxes', [
                    'header' => $office->country,
                    'phone' => $office->phone,
                    'email' => $office->email,
                    'address_line_1' => $office->address1,
                    'address_line_2' => $office->address2,
                    'address_line_3' => $office->address3,
                    'address_line_4' => $office->address4,
                    ])
            @endforeach
        </div>
    </div>
    @endif
    @if($section->_type == 'working_with' && $section->show_working_with)
        @include('sections.working_with')
    @endif
    @if($section->_type == 'get_in_touch' && $section->show_get_in_touch)
        @include('sections.get_in_touch')
    @endif
    @if($section->_type == 'statistics')
        @include('sections.statistics', ['statistics' => $section->stats])
    @endif
    @if($section->_type == 'professional_boxes')
        @include('sections.professionals', ['professionals' => $section->professional_associations])
    @endif
    @if($section->_type == 'vessel_boxes')
        @include('sections.vessels', ['vessels' => $section->vessels_associations])
    @endif

        {{-- @if ($section['type'] == '1column')
            @foreach ($section['1column'] as $secData)

                @if ($secData->_type == 'tekst')
                    @include('sections.fullwidth_text', [
                    'text' => $secData->text,
                    ])
                @endif
                @if ($secData->_type == 'afbeelding')
                    @include('sections.fullwidth_afbeelding', [
                    'imgUrl' => $secData->img,
                    'imgAlt' => $secData->alt,
                    ])
                @endif
                @if ($secData->_type == 'bestand')
                    @include('sections.fullwidth_bestand', [
                    'file' => $secData->file,
                    'title' => $secData->title,
                    ])
                @endif
                @if ($secData->_type == 'nieuws-items')
                    @foreach ($secData->news_associations as $newsItem)
                        @include('sections.fullwidth_news', [
                        'title' => $newsItem->title,
                        'site_title' => $newsItem->site_title,
                        'news_url' => $newsItem->news_url,
                        'text' => $newsItem->text,
                        'image' => $newsItem->image,
                        ])
                    @endforeach
                @endif

            @endforeach
        @endif

        @if ($section['type'] == '2column')
            <div class="inner">
            <div class="columns">
                <div>
                    @foreach ($section['2column']['left'] as $secData)
                        @include('snippets.contentSection_2columns')
                    @endforeach
                </div>
                <div>
                    @foreach ($section['2column']['right'] as $secData)
                        @include('snippets.contentSection_2columns')
                    @endforeach
                </div>
            </div>
            </div>
        @endif --}}






    {{-- @if ($section['type'] == 'banner')
        @include('sections.banner', [
            'image' => $section['img'], 
            'extraPadding' => $section['checked'],
            // 'wl' => $section['wl_header'],
            // 'bl' => $section['bl_header'],
            't_align' => $section['text_align'],
            't_color' => $section['text_color'],
            'i_opacity' => $section['image_opacity'],
            'text' => $section['text'],
            'buttons' => $section['links'],
            ])
    @endif
    @if ($section['type'] == 'text')
        @include('sections.text', [
            // 'image' => $section['img'], 
            // 'wl' => $section['wl_header'],
            // 'bl' => $section['bl_header'],
            // 'vAlign' => $section['valign_center'],
            'text' => $section['text'],
            // 'bg_color' => $section['background_color'],
            // 'orientation' => $section['orientation'],
            // 'margin' => $section['margin'],
            ])
    @endif
    @if ($section['type'] == 'text_flex')
        @include('sections.text_flex', [
            // 'image' => $section['img'], 
            // 'wl' => $section['wl_header'],
            // 'bl' => $section['bl_header'],
            // 'vAlign' => $section['valign_center'],
            'header' => $section['hdr'],
            'text_left' => $section['text_l'],
            'text_right' => $section['text_r'],
            'bg_color' => $section['background_color'],
            'column_stretch' => $section['stretch'],
            'buttons_l' => $section['links_l'],
            'buttons_r' => $section['links_r'],
            // 'orientation' => $section['orientation'],
            // 'margin' => $section['margin'],
            ])
    @endif
    @if ($section['type'] == 'text_grid')
        @include('sections.text_grid', [
            'gridItems' => $section['grid_items'], 
            ])
    @endif
    @if ($section['type'] == 'info_icons')
        @include('sections.info_icons', [
            'infoItems' => $section['info_icons'], 
            ])
    @endif
    @if ($section['type'] == 'testimonials')
        @include('sections.testimonials', [
            'testimonials' => $section['testimonials'], 
            ])
    @endif
    @if ($section['type'] == 'colleagues')
        @include('sections.colleagues', [
            'colleagues' => $section['people'], 
            ])
    @endif
    @if ($section['type'] == 'joboffers')
        <div id="jobOffersHomepage">
            <div class="inner">
                @include('sections.jobOffers', [
                    'jobOffers' => $section['jobOffers'], 
                    ])
                <div role="tablist" class="jobOfferDots"></div>
            </div>
        </div>
        @section('before_closing_body_tag')
        <script>
            makeResultsClickable();
        </script>
        @endsection
    @endif
    @if ($section['type'] == 'information_blocks_holder')
        @include('sections.information_blocks', ['info_blocks' => $section['blocks']])
    @endif
    @if ($section['type'] == 'person_wraps')
        @include('sections.people_blocks', ['person_blocks' => $section['people']])
    @endif --}}
@endforeach
