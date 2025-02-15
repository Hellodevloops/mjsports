<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use App\Models\Category;
use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;

class Home extends Model
{
    use HasFactory, AsSource, Attachable;


    protected $table = 'homes';


    protected $fillable = [

        'title',
        'heading',
        'hero',
       



    ];

//     public function category()
// {
//     return $this->belongsTo(Category::class,'categoryname','name');
// }

}
