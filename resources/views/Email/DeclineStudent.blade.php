@component('mail::message')
# Admission form Decline St. Ninians School
Respected Sir/Madam,<br><br>

Sorry You Are Declined By Admin. Please Contact In School<br><br>

Reason : {{ $message }} <br><br>

Thanks,<br>
{{ config('app.name') }}<br><br>
www.stniniansschools.com
@endcomponent
