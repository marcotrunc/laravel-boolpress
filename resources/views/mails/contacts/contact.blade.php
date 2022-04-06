@component('mail::message')
# Mail inviata

<p><strong>Email:</strong> <span>{{ $contact['email'] }}</span></p>

<p><strong>Message:</strong> <span>{{ $contact['message'] }}</span></p>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
