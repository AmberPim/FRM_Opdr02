@component('mail::message')

    #Thank you for your message. Please don't send another one.

    <strong> Name</strong> {{$data['name']}}
    <strong> Email</strong> {{$data['email']}}

    <strong> Message </strong> {{$data['message']}}
@endcomponent
