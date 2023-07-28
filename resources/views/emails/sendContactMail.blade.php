<x-mail::message>
    Name: {{ $data['name'] }} <br>
    Email: {{ $data['email'] }} <br>
    Message: {{ $data['message'] }} <br>
    Mobile: {{ $data['mobile'] }} <br>
    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
