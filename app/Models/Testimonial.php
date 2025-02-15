<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;

use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;

class Testimonial extends Model
{
    use HasFactory, AsSource, Attachable;


    protected $table = 'testimonials';


    protected $fillable = [

        'image',
        'designation',
        'content',
        'name',



    ];

//     public function category()
// {
//     return $this->belongsTo(Category::class,'categoryname','name');
// }

}
