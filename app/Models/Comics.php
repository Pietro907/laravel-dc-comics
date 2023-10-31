<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    use HasFactory;


/*     protected function address(): Comics
{
    return Comics::make(
        get: fn (mixed $comics, array $comic) => new Comics(
            $comic['title'],
            $comic['thumb'],
        ),
    );
} */

}
