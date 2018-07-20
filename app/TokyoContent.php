<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokyoContent extends Model
{
    protected $fillable = ['content', 'user_id'];
    protected $table = 'tokyocontents';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
