<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;


class ContactEditScreen extends Screen
{
   /**
     * @var Contact
     */
    public $contact;

    /**
     * Query data.
     *
     * @param Contact $contact
     *
     * @return array
     */

     public function query(Contact $contact): array
     {
         return [
             'contact' => $contact
         ];
     }

   /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->contact->exists ? 'Edit contact' : 'Creating a new contact';
    }

    // /**
    //  * The description is displayed on the user's screen under the heading
    //  */
    // public function description(): ?string
    // {
    //     return "Blog posts";
    // }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     * @return Link[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create contact')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->contact->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->contact->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->contact->exists),
        ];
    }

   /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                    Input::make('contact.first_name')
                    ->title('First Name'),

                    Input::make('contact.last_name')
                    ->title('Last Name'),

                    Input::make('contact.phone')
                    ->title('Contact Number'),

                    Input::make('contact.email')
                    ->title('Email'),

                    TextArea::make('contact.message')
                    ->title('Message'),
            ])->title('Contact Information'),




        ];
    }

     /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->contact->fill($request->get('contact'))->save();

        Alert::info('You have successfully created a contact.');

        return redirect()->route('platform.contact.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        $this->contact->delete();

        Alert::info('You have successfully deleted the contact.');

        return redirect()->route('platform.contact.list');
    }
}
