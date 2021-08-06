@component('mail::message')
# Olá!

Você recebeu um novo comentario.

@component('mail::button', ['url' => config('api.url_frontend')])
Clique aqui e confira
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
