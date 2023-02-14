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
        </div>
