<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['user_id', 'title', 'production','price', 'image'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function song()
    {
        return $this->hasMany('App\Song', 'album_id');
    }
}
