<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendingList extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function verdict_lists()
    {
        return $this->hasMany('App\VerdictList');
    }
    
    protected $table = 'pending_lists';
}
