<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   use App\Search\Searchable;

    protected $casts = [
        'tags' => 'json',
    ];
}
