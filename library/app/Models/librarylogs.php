<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class librarylogs extends Model
{
    protected $fillable = [
        'id',
        'name',
        'timestamp',
        'studentnumber',
        'book',
        'date',
        'returndate',
        'status'
    ];
}
