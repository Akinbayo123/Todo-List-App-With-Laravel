@component('mail::message')
# Reset your password

Click the button below to reset your password:

@component('mail::button', ['url' => url('/reset-password/'.$token.$user)])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
