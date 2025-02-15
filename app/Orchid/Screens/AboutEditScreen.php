<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\About;
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
use Orchid\Screen\Fields\Cropper;


class AboutEditScreen extends Screen
{
    /**
      * @var About
      */
     public $about;

     /**
      * Query data.
      *
      * @param About $about
      *
      * @return array
      */

      public function query(About $about): array
      {
          return [
              'about' => $about
          ];
      }

    /**
      * The name is displayed on the user's screen and in the headers
      */
     public function name(): ?string
     {
         return $this->about->exists ? 'Edit about' : 'Creating a new about';
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
             Button::make('Create about')
                 ->icon('pencil')
                 ->method('createOrUpdate')
                 ->canSee(!$this->about->exists),

             Button::make('Update')
                 ->icon('note')
                 ->method('createOrUpdate')
                 ->canSee($this->about->exists),

             Button::make('Remove')
                 ->icon('trash')
                 ->method('remove')
                 ->canSee($this->about->exists),
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
                Cropper::make('about.image')
                ->title('Image'),



                Input::make('about.title')
                ->title('title'),

                Quill::make('about.content')
                ->title('content'),
                // ->language(Code::Markup),


        ])->title('about Information'),



         ];
     }

      /**
      * @param \Illuminate\Http\Request $request
      *
      * @return \Illuminate\Http\RedirectResponse
      */
     public function createOrUpdate(Request $request)
     {
         $this->about->fill($request->get('about'))->save();

         Alert::info('You have successfully created a about.');

         return redirect()->route('platform.about.list');
     }

     /**
      * @return \Illuminate\Http\RedirectResponse
      */
     public function remove()
     {
         $this->about->delete();

         Alert::info('You have successfully deleted the about.');

         return redirect()->route('platform.about.list');
     }
}
