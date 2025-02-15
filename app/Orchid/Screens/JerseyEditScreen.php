<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Cropper;
use App\Models\Jersey;
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


class JerseyEditScreen extends Screen
{
    /**
      * @var Jersey
      */
     public $jersey;

     /**
      * Query data.
      *
      * @param Jersey $jersey
      *
      * @return array
      */

      public function query(Jersey $jersey): array
      {
          return [
              'jersey' => $jersey
          ];
      }

    /**
      * The name is displayed on the user's screen and in the headers
      */
     public function name(): ?string
     {
         return $this->jersey->exists ? 'Edit jersey' : 'Creating a new jersey';
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
             Button::make('Create jersey')
                 ->icon('pencil')
                 ->method('createOrUpdate')
                 ->canSee(!$this->jersey->exists),

             Button::make('Update')
                 ->icon('note')
                 ->method('createOrUpdate')
                 ->canSee($this->jersey->exists),

             Button::make('Remove')
                 ->icon('trash')
                 ->method('remove')
                 ->canSee($this->jersey->exists),
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






         ];
     }

      /**
      * @param \Illuminate\Http\Request $request
      *
      * @return \Illuminate\Http\RedirectResponse
      */
     public function createOrUpdate(Request $request)
     {
         $this->jersey->fill($request->get('jersey'))->save();

         Alert::info('You have successfully created a jersey.');

         return redirect()->route('platform.jersey.list');
     }

     /**
      * @return \Illuminate\Http\RedirectResponse
      */
     public function remove()
     {
         $this->jersey->delete();

         Alert::info('You have successfully deleted the jersey.');

         return redirect()->route('platform.jersey.list');
     }
}
