@component('mail::message')
# Introduction

Thanks for your query, {{ $firstname }} {{ $secondname }}
<br>
We are happy to inform you that,the answer of your query is
{{ $reply }}
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
