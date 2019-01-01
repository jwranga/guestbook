<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    public $fillable = [
        'name',
        'email',
        'body',
        'flagged_at',
    ];
    
    public function scopeIgnoreFlagged($query)
    {
        return $query->where('flagged_at', null);
    }
    
    public function flaged()
    {
        return $this->update(['flagged_at' => Carbone::now()]);
    }
}
