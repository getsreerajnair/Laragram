@component('mail::message')
# Welcome to LaraGram

Enjoy your life with us.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
