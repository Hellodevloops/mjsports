<?php

namespace App\Orchid\Layouts;
use App\Models\Testimonial;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;

use Orchid\Screen\Fields\Input;
class TestimonialListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'testimonials';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            // TD::make()
            // ->render(function ($product) {
            //     $categoryName = $product->category->categoryname;
            //     return Link::make($categoryName)
            //         ->route('platform.product.edit', $product);
            // }),


            TD::make('name')
            ->sort()
                ->filter(Input::make())
                ->render(function (Testimonial $testimonial) {
                    return Link::make($testimonial->name)
                        ->route('platform.testimonial.edit', $testimonial);
                }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
