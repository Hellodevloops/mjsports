<?php

namespace App\Orchid\Layouts;

use App\Models\Home;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\Input;


class HomeListLayout extends Table

{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'homes';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title')
            ->sort()
            ->filter(Input::make())
            ->render(function (Home $home) {
                return Link::make($home->title)
                    ->route('platform.home.edit', $home);
            }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}