@component('mail::message')
# Sender Name: {{$message->name}}
# Message Type: {{$message->type}}
Good day,<br>
This message is received from the 
above named person via website.<br>

{{$message->message}} <br>
<br>
Phone: {{ $message->phone }}<br>
Email: {{ $message->email }}<br>
File Attachment: {{ $message->file }}<br>

Best Regards,<br>
BOSJ IT Unit
@endcomponent
