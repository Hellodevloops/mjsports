<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Banner;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;

class BannerListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'banners';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title')
                ->sort()
                ->filter(Input::make())
                ->render(function (Banner $banner) {
                    return Link::make($banner->title)
                        ->route('platform.banner.edit', $banner);
                }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
