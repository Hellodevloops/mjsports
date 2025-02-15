<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\About;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;


class AboutListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'abouts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title')
                ->sort()
                ->filter(Input::make())
                ->render(function (About $about) {
                    return Link::make($about->title)
                        ->route('platform.about.edit', $about);
                }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
