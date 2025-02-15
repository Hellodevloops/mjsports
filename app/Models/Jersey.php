<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jersey extends Model
{
    use HasFactory;
    // protected $target = 'jerseys';
    protected $table = 'jerseys';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'mobile_number',
        'jersey_size', 'left_chest_logo_image', 'right_chest_logo_image', 'left_logo', 'right_logo',
        'team_name', 'material_choice', 'patterns', 'special_instructions'
    ];

}
