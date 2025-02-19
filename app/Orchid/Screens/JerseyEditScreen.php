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
        'first_name' => $jersey->first_name,
        'last_name' => $jersey->last_name,
        'email' => $jersey->email,
        'mobile_number' => $jersey->mobile_number,
        'jersey_size' => $this->extractJsonField($jersey, 'jersey_specifications', 'jersey_size'),
        'material_choice' => $this->extractJsonField($jersey, 'jersey_specifications', 'material_choice'),
        'sleeves' => $this->extractJsonField($jersey, 'jersey_specifications', 'sleeves'),
        'number' => $this->extractJsonField($jersey, 'jersey_specifications', 'number'),
        'left_chest_logo_image' => $jersey->left_chest_logo_image,
        'right_chest_logo_image' => $jersey->right_chest_logo_image,
        'left_logo' => $jersey->left_logo,
        'right_logo' => $jersey->right_logo,
        'team_name' => $jersey->team_name,
        'patterns' => $jersey->patterns,
        'special_instructions' => $jersey->special_instructions,
    ];
}

/**
 * Extracts a specific field from a JSON column.
 */
private function extractJsonField(Jersey $jersey, string $jsonColumn, string $field)
{
    $jsonData = json_decode($jersey->$jsonColumn, true);
    return $jsonData[$field] ?? null;
}


    /**
      * The name is displayed on the user's screen and in the headers
      */
      public function name(): ?string
      {
          return isset($this->jersey) && $this->jersey->exists
              ? 'Edit Jersey'
              : 'Creating a New Jersey';
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
          $jerseyExists = isset($this->jersey) && $this->jersey->exists;

          return [
              Button::make('Create Jersey')
                  ->icon('pencil')
                  ->method('createOrUpdate')
                  ->canSee(!$jerseyExists),

              Button::make('Update')
                  ->icon('note')
                  ->method('createOrUpdate')
                  ->canSee($jerseyExists),

              Button::make('Remove')
                  ->icon('trash')
                  ->method('remove')
                  ->canSee($jerseyExists),
          ];
      }


    /**
      * Views.
      *
      * @return Layout[]
      */
      public function layout(): array
      {
          $jerseyData = $this->jersey ?? new Jersey(); // Ensure $jersey is always set

          return [
              Layout::rows([
                  Input::make('jersey.first_name')
                      ->title('First Name')
                      ->placeholder('Enter first name')
                      ->maxlength(15)
                      ->value($jerseyData->first_name ?? ''),

                  Input::make('jersey.last_name')
                      ->title('Last Name')
                      ->placeholder('Enter last name')
                      ->maxlength(255)
                      ->value($jerseyData->last_name ?? ''),

                  Input::make('jersey.email')
                      ->title('Email')
                      ->placeholder('Enter email')
                      ->type('email')
                      ->maxlength(255)
                      ->value($jerseyData->email ?? ''),

                  Input::make('jersey.mobile_number')
                      ->title('Mobile Number')
                      ->placeholder('Enter mobile number')
                      ->maxlength(15)
                      ->value($jerseyData->mobile_number ?? ''),

                  Input::make('jersey.jersey_size')
                      ->title('Jersey Size')
                      ->placeholder('Enter jersey size')
                      ->maxlength(10)
                      ->value($jerseyData->jersey_size ?? ''),

                  Input::make('jersey.material_choice')
                      ->title('Material Choice')
                      ->placeholder('Enter material choice')
                      ->maxlength(255)
                      ->value($jerseyData->material_choice ?? ''),

                  Input::make('jersey.sleeves')
                      ->title('Sleeves')
                      ->placeholder('Enter sleeves')
                      ->maxlength(10)
                      ->value($jerseyData->sleeves ?? ''),

                  Input::make('jersey.number')
                      ->title('Jersey Number')
                      ->placeholder('Enter number')
                      ->type('number')
                      ->value($jerseyData->number ?? ''),

                  Upload::make('jersey.left_chest_logo_image')
                      ->title('Left Chest Logo')
                      ->acceptedFiles('image/*')
                      ->maxFiles(1),

                  Upload::make('jersey.right_chest_logo_image')
                      ->title('Right Chest Logo')
                      ->acceptedFiles('image/*')
                      ->maxFiles(1),

                  Input::make('jersey.left_logo')
                      ->title('Left Logo Text')
                      ->placeholder('Enter left logo text')
                      ->maxlength(255)
                      ->value($jerseyData->left_logo ?? ''),

                  Input::make('jersey.right_logo')
                      ->title('Right Logo Text')
                      ->placeholder('Enter right logo text')
                      ->maxlength(255)
                      ->value($jerseyData->right_logo ?? ''),

                  Input::make('jersey.team_name')
                      ->title('Team Name')
                      ->placeholder('Enter team name')
                      ->maxlength(255)
                      ->value($jerseyData->team_name ?? ''),

                  Input::make('jersey.patterns')
                      ->title('Patterns')
                      ->placeholder('Enter patterns')
                      ->maxlength(255)
                      ->value($jerseyData->patterns ?? ''),

                  Input::make('jersey.special_instructions')
                      ->title('Special Instructions')
                      ->placeholder('Enter special instructions')
                      ->maxlength(500)
                      ->value($jerseyData->special_instructions ?? ''),
              ]),
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
