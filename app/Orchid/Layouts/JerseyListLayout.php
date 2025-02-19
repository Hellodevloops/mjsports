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
        $this->generateColumn('first_name', 'First Name'),
        $this->generateColumn('last_name', 'Last Name'),
        $this->generateColumn('email', 'Email'),
        $this->generateColumn('mobile_number', 'Contact'),
        $this->generateColumn('jersey_size', 'Jersey Size', 'jersey_specifications'),
        $this->generateColumn('material_choice', 'Material', 'jersey_specifications'),
        $this->generateColumn('number', 'Number', 'jersey_specifications'),
        TD::make('created_at', 'Created')
            ->sort()
            ->render(fn(Jersey $jersey) => $jersey->created_at->format('Y-m-d H:i')),
        TD::make('updated_at', 'Last Edit')
            ->sort()
            ->render(fn(Jersey $jersey) => $jersey->updated_at->format('Y-m-d H:i')),
    ];
}

private function generateColumn(string $field, string $label, string $jsonField = 'personal_info'): TD
{
    return TD::make($field, $label)
        ->sort()
        ->filter(Input::make())
        ->render(function (Jersey $jersey) use ($field, $jsonField) {
            $singleValue = $jersey->$field;

            if ($singleValue) {
                return Link::make($singleValue)->route('platform.jersey.edit', $jersey);
            }

            $jsonData = json_decode($jersey->$jsonField, true);

            if ($jsonData) {
                $values = array_column($jsonData, $field);
                return Link::make(implode(', ', $values))->route('platform.jersey.edit', $jersey);
            }

            return '-';
        });
}

}
