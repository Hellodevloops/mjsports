<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Contact;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;

class ContactListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'contacts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('first_name')
                ->sort()
                ->filter(Input::make())
                ->render(function (Contact $contact) {
                    return Link::make($contact->first_name)
                        ->route('platform.contact.edit', $contact);
                }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),

                TD::make('whatsapp', 'WhatsApp')
                ->render(function (Contact $contact) {
                    if ($contact->first_name && $contact->phone) {
                        $phone = $contact->phone;
                        $message = "Hello {$contact->first_name}, thank you for contacting us!";
                        $url = "https://api.whatsapp.com/send?phone={$phone}&text=" . urlencode($message);

                        return "<a href='{$url}' target='_blank' class='btn btn-sm btn-info'>WhatsApp</a>";
                    }
                    return null; // Handle the case where first_name or phone is null
                }),
        ];
    }
}
