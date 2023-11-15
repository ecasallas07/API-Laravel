<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded = [];


    //Con hidden no permitimos que se vosualicen elementos de la tabla
    protected $hidden = [
        'updated_at'
    ];
}
