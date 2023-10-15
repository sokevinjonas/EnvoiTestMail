<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EnvoiMailParent extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $nom;
    protected $class;

    public function __construct($nom, $class)
    {
        $this->nom = $nom;
        $this->class = $class;
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
    // public function toMail(object $notifiable): MailMessage
    
    // {
    //     return (new MailMessage)
    //         ->greeting('Bonjour chers parents,')
    //         ->line('Nous sommes ravis de vous informer que vous pouvez désormais consulter les résultats et les notes de vos enfants en ligne.')
    //         ->line('De plus, nous vous tiendrons au courant des actualités de l\'école, telles que le meilleur élève du mois et les événements à venir.')
    //         ->line('Pour accéder à ces informations, veuillez visiter notre plateforme en cliquant sur le lien ci-dessous :')
    //         ->action('Accéder à la plateforme', url('www.facebook.com'))
    //         ->line('Nous vous remercions pour votre soutien continu et votre confiance en notre établissement.')
    //         ->salutation('Cordialement,')
    //         ->line('L\'équipe du Lycée PteamSchool ');
    // }
    public function toMail($notifiable)
    {
        return (new MailMessage)->view(
            'email_template', // Nom de la vue
            [
                'lien' => 'https://jonasdev.pteam-transfert.com/', // Données à passer à la vue
                'nom' => $this->nom ,
                'class' => $this->class,
            ]

        );
    }

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
