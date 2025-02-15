<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Cropper;
use App\Models\Home;
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
use App\Models\Product;
use App\Models\Category;


class HomeEditScreen extends Screen
{
    /**
      * @var Home
      */
     public $home;

     /**
      * Query data.
      *
      * @param Home $home
      *
      * @return array
      */

      public function query(Home $home): array
      {
          return [
              'home' => $home
          ];
      }

    /**
      * The name is displayed on the user's screen and in the headers
      */
     public function name(): ?string
     {
         return $this->home->exists ? 'Edit home' : 'Creating a new home';
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
             Button::make('Create home')
                 ->icon('pencil')
                 ->method('createOrUpdate')
                 ->canSee(!$this->home->exists),

             Button::make('Update')
                 ->icon('note')
                 ->method('createOrUpdate')
                 ->canSee($this->home->exists),

             Button::make('Remove')
                 ->icon('trash')
                 ->method('remove')
                 ->canSee($this->home->exists),
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
            // Section one(Herosection)
            Layout::rows([
                Input::make('home.title')
                    ->title('Title'),

                Input::make('home.heading')
                    ->title('Heading'),

                // Cropper::make('home.hero')
                // // ->targetId()
                // ->title('Large web banner image, generally in the front and center')
                // ->width(1000)
                // ->height(500),

                Cropper::make('home.hero')
                ->title('hero'),
            ])->title('Hero Section'),



           

         ];
     }

      /**
      * @param \Illuminate\Http\Request $request
      *
      * @return \Illuminate\Http\RedirectResponse
      */
     public function createOrUpdate(Request $request)
     {
         $this->home->fill($request->get('home'))->save();

         Alert::info('You have successfully created a home.');

         return redirect()->route('platform.home.list');
     }

     /**
      * @return \Illuminate\Http\RedirectResponse
      */
     public function remove()
     {
         $this->home->delete();

         Alert::info('You have successfully deleted the home.');

         return redirect()->route('platform.home.list');
     }
}
