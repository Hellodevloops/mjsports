<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\JerseyListLayout;
use App\Models\Jersey;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class JerseyListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'jerseys' => Jersey::paginate()
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Customised jersey';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All jerseys";
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
                ->route('platform.jersey.edit')
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
            JerseyListLayout::class
        ];
    }
}
