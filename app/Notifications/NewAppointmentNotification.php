<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;
use App\Models\Appointment;

class NewAppointmentNotification extends Notification
{
    use Queueable;

    protected $appointment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
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
            'name' => $this->appointment->first_name . ' ' . $this->appointment->last_name,
            'date' => $this->appointment->date->toFormattedDateString(),
            'time' => $this->appointment->time,
            'details' => 'New appointment request received.',
        ];
    }

    /**
     * Get the broadcastable representation of the notification.
     *
     * @return BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'name' => $this->appointment->first_name . ' ' . $this->appointment->last_name,
            'date' => $this->appointment->date->toFormattedDateString(),
            'time' => $this->appointment->time,
            'details' => 'New appointment request received.',
        ]);
    }
}
