<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Banner extends Model
{
    use HasFactory, AsSource;

    protected $table = 'banners';


    protected $fillable = [

        'image',
         'title',
         'heading'

    ];
}
