@component('mail::message', ['messages'=> $messages, ] )
# System Notification (Test Mode)
Good day my lord,<br>

This is an automated notification for the received 
of Petition sent via Borno Judiciary website.<br>

<br>
Sender Name: {{ $messages->name }}<br>
The message has been sent to:<br>
petition.hcourt@courts.gov.ng

 
Best Regards,<br>
BOSJ IT Unit
@endcomponent
