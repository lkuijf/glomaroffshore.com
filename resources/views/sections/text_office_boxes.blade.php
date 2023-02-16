        <div class="introTextWrap">
            <div>
                <h2>{!! $header !!}</h2>
                <p class="contactIcon naw">{{ $address_line_1 }}<br />
                    {{ $address_line_2 }}<br />
                    {{ $address_line_3 }}<br />
                    {{ $address_line_4 }}</p>
                <p class="contactIcon phone"><a href="tel:{{ $phone }}">{{ $phone }}</a></p>
                <p class="contactIcon email"><a href="mailto:{{ $email }}">{{ $email }}</a></p>
            </div>
            {{-- <iframe width="100%" height="400" src="https://maps.google.com/maps?q=Faneromenis+228,+Larnaca,+Cyprus&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> --}}
            <iframe width="100%" height="400" src="https://maps.google.com/maps?q={{ urlencode($address_line_1 . '+' . $address_line_2 . '+' . $address_line_3 . '+' . $address_line_4) }}&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
