<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RappelPaiementNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $montant;
    protected $devise;
    protected $lienPaiement;

    public function __construct($montant, $devise, $lienPaiement)
    {
        $this->montant = $montant;
        $this->devise = $devise;
        $this->lienPaiement = $lienPaiement;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)->view('email_scolariter_template',
        [
            'devise' => $this->devise,
            'montant' => $this->montant,
            'lien_paiement' => $this->lienPaiement,
        ]
    );

    }
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
