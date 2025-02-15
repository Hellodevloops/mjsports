<?php

namespace App\Orchid\Layouts;

use App\Models\Jersey;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\Input;

class JerseyListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'jerseys';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('first_name')
                ->sort()
                ->filter(Input::make())
                ->render(function (Jersey $jersey) {
                    return Link::make($jersey->first_name)
                        ->route('platform.jersey.edit', $jersey);
                }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
