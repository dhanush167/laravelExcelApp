<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Book extends Model
{
    //
    public function author()
    {
        return $this->hasMany(Author::class);
    }
}
