<?php

namespace App\Notifications;
use App\Models\Message;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendPetition extends Notification
{
    use Queueable;

    private Message $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if($this->message->file == 'no-upload') {
            return (new MailMessage)->markdown('emails.contactmessage', ['message'=> $this->message, ])
            ->from('noreply@bornojudiciary.gov.ng')
            ->subject('Petition Received from Website User');     
            }
            else
            {
            return (new MailMessage)->markdown('emails.contactmessage', ['message'=> $this->message, ])
            ->from('noreply@bornojudiciary.gov.ng')
            ->subject('Petition Received from Website User')
           ->attach(storage_path('app/public/messages/'.$this->message->file));
          
            }

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
