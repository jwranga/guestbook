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
    
    public function scopeIgnoreFlaged($query)
    {
        return $query->where('flagged_at', null);
    }
    
    public function flagged()
    {
        return $this->update(['flagged_at' => Carbon::now()]);
    }
    
    public function getAvatarAttribute()
    {
        return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->email));
    }
}
