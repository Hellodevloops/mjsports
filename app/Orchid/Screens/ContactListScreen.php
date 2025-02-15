<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\ContactListLayout;
use App\Models\Contact;
use Orchid\Screen\Actions\Link;

class ContactListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'contacts' => Contact::paginate()
        ];
    }

     /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Contact';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All contacts";
    }



    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.contact.edit')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ContactListLayout::class
        ];
    }
}
