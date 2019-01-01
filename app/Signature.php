<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    public $fillable = [
        'name',
        'email',
        'body',
        'flagged_at',
    ];
}
