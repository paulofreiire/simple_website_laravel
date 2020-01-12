@component('mail::message')
    Olá, você recebeu um novo contato a partir do seu site

    Nome: <b> {{ $reply_name }}</b>

    Nome: {{ $reply_email }}

    Sobre: {{ $subject }}

    @component('mail::panel')
        {{$message}}
    @endcomponent
@endcomponent

