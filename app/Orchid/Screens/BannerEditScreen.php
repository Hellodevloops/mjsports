<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Banner;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Cropper;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;

class BannerEditScreen extends Screen
{
    /**
     * @var Banner
     */
    public $banner;

    /**
     * Query data.
     *
     * @param Banner $banner
     *
     * @return array
     */
    public function query(Banner $banner): array
    {
        $this->banner = $banner;

        return [
            'banner' => $banner,
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->banner->exists ? 'Edit Banner' : 'Create New Banner';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->banner->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->banner->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->banner->exists),
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
                Cropper::make('banner.image')
                    ->title('Image')
                    ,

                Input::make('banner.title')
                    ->title('Title'),

                Input::make('banner.heading')
                    ->title('Heading'),
            ]),
        ];
    }

    /**
     * Store or update the Banner.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->banner->fill($request->get('banner'))->save();

        Alert::info('Banner saved successfully.');

        return redirect()->route('platform.banner.list');
    }

    /**
     * Remove the Banner.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        $this->banner->delete();

        Alert::info('Banner deleted successfully.');

        return redirect()->route('platform.banner.list');
    }
}
