<form action="/submit-subscription-form" method="post" class="subscriptionForm">
    @csrf
    <div @error('First_name')class="error" data-err-msg="{{ $message }}"@enderror><input type="text" name="First_name" placeholder="First name" value="{{ old('First_name') }}"></div>
    <div @error('Last_name')class="error" data-err-msg="{{ $message }}"@enderror><input type="text" name="Last_name" placeholder="Last name" value="{{ old('Last_name') }}"></div>
    <div @error('Email')class="error" data-err-msg="{{ $message }}"@enderror><input type="text" name="Email" placeholder="E-mail address" value="{{ old('Email') }}"></div>
    <button type="submit">SUBSCRIBE</button>
</form>
