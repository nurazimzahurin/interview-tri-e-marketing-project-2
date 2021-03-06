<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniqueCode extends Model
{
    protected $table = 'unique_codes';

    protected $fillable = [
        'unique_code'
    ];

    public $timestamps = false;
}
