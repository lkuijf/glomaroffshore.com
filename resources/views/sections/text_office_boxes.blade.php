        <div class="introTextWrap contactBox">
            <div>
                <h2>{!! $header !!}</h2>
                <p class="contactIcon naw">{{ $address_line_1 }}<br />
                    {{ $address_line_2 }}<br />
                    {{ $address_line_3 }}<br />
                    {{ $address_line_4 }}</p>
                <p class="contactIcon phone"><a href="tel:{{ Str::replace(' ', '', $phone) }}">{{ $phone }}</a></p>
                <p class="contactIcon email"><a href="mailto:{{ $email }}">{{ $email }}</a></p>
            </div>
            <div class="iframeWrap"><iframe width="100%" height="400" src="https://maps.google.com/maps?q={{ urlencode($gm_address) }}&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
        </div>
