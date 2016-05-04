<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerdictList extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function pending_lists()
    {
        return $this->belongsTo('App\PendingList');
    }
    
    protected $table = 'verdict_lists';
}
