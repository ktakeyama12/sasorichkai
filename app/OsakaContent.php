<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OsakaContent extends Model
{
    protected $fillable = ['content', 'user_id'];
    protected $table = 'osakacontents';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
