<?php

namespace App\Notifications;

use App\Filament\Resources\ContactMessages\ContactMessageResource;
use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactMessageReceived extends Notification
{
    use Queueable;

    public function __construct(public ContactMessage $contactMessage)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("New message from {$this->contactMessage->name}")
            ->replyTo($this->contactMessage->email, $this->contactMessage->name)
            ->greeting('New message from the website')
            ->line("**From:** {$this->contactMessage->name} ({$this->contactMessage->email})")
            ->line($this->contactMessage->message)
            ->action('Open in admin', ContactMessageResource::getUrl('index'))
            ->salutation('Reply to this email to answer them directly.');
    }
}
