<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class About extends Model
{
    use HasFactory, AsSource;

    protected $table = 'abouts';


    protected $fillable = [
        'image',
        'title',
        'content',



    ];
}
