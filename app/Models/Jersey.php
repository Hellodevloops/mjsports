<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Jersey extends Model
{
    use HasFactory, AsSource;
    // protected $target = 'jerseys';
    protected $table = 'jerseys';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'mobile_number','jersey_specifications',
        'jersey_size','sleeves','number','name', 'left_chest_logo_image', 'right_chest_logo_image', 'left_logo', 'right_logo',
        'team_name', 'material_choice', 'patterns', 'special_instructions'
    ];
    // protected $fillable = [
    //     'personal_info',
    //  'jersey_specifications',
    //  'left_chest_logo_image',
    //  'right_chest_logo_image',
    //  'left_logo',
    //  'right_logo',
    //  'team_name',
    //  'patterns',
    //  'special_instructions',

    //  ];

}
