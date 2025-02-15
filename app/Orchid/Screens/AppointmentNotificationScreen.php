<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Illuminate\Notifications\DatabaseNotification;
use Orchid\Screen\Fields\Input;

class AppointmentNotificationScreen extends Screen
{
    /**
     * Query data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'notifications' => auth()->user()->unreadNotifications()->get()
        ];
    }

    /**
     * Screen name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Appointment Notifications';
    }

    /**
     * Screen description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Displays a list of unread appointment notifications.';
    }

    /**
     * Screen layout.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('notifications', [
                TD::make('name', 'Name')->render(function (DatabaseNotification $notification) {
                    return $notification->data['name'];
                }),

                TD::make('date', 'Date')->render(function (DatabaseNotification $notification) {
                    return $notification->data['date'];
                }),

                TD::make('time', 'Time')->render(function (DatabaseNotification $notification) {
                    return $notification->data['time'];
                }),

                TD::make('details', 'Details')->render(function (DatabaseNotification $notification) {
                    return $notification->data['details'];
                }),

                TD::make('actions', 'Actions')->render(function (DatabaseNotification $notification) {
                    return '<a href="#" class="btn btn-sm btn-info">View</a>';
                }),
            ]),
        ];
    }
}
