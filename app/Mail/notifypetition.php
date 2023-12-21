<?php

namespace App\Mail;
use App\Models\Message;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notifypetition extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function build()
    {
        return $this->markdown('emails.notifications', 
        ['messages'=>$this->message])
            ->from('noreply@bornojudiciary.gov.ng')
            ->subject('Petition Received from Website User');
    }

}
