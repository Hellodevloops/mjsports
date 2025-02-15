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
use App\Models\Testimonial;



class TestimonialEditScreen extends Screen
{
    /**
      * @var Testimonial
      */
     public $testimonial;

     /**
      * Query data.
      *
      * @param Testimonial $testimonial
      *
      * @return array
      */

      public function query(Testimonial $testimonial): array
      {
          return [
              'testimonial' => $testimonial
          ];
      }

    /**
      * The name is displayed on the user's screen and in the headers
      */
     public function name(): ?string
     {
         return $this->testimonial->exists ? 'Edit testimonial' : 'Creating a new testimonial';
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
             Button::make('Create testimonial')
                 ->icon('pencil')
                 ->method('createOrUpdate')
                 ->canSee(!$this->testimonial->exists),

             Button::make('Update')
                 ->icon('note')
                 ->method('createOrUpdate')
                 ->canSee($this->testimonial->exists),

             Button::make('Remove')
                 ->icon('trash')
                 ->method('remove')
                 ->canSee($this->testimonial->exists),
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
                 Cropper::make('testimonial.image')
                 ->title('Image'),

                 Input::make('testimonial.designation')
                     ->title('designation'),

                 Input::make('testimonial.content')
                     ->title('Content'),

                     Input::make('testimonial.name')
                     ->title('Name'),

             ])->title('Testimonials Section'),

          ];
      }

      /**
      * @param \Illuminate\Http\Request $request
      *
      * @return \Illuminate\Http\RedirectResponse
      */
     public function createOrUpdate(Request $request)
     {
         $this->testimonial->fill($request->get('testimonial'))->save();

         Alert::info('You have successfully created a testimonial.');

         return redirect()->route('platform.testimonial.list');
     }

     /**
      * @return \Illuminate\Http\RedirectResponse
      */
     public function remove()
     {
         $this->testimonial->delete();

         Alert::info('You have successfully deleted the testimonial.');

         return redirect()->route('platform.testimonial.list');
     }
}
