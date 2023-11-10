<x-mail::message>

welcome {{ $username }}

<x-mail::button :url="$url">
Activate your account
</x-mail::button>

</x-mail::message>
