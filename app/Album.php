<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
      'title',
      'artist',
      'year',
      'genre_id',
    ];

  public function cover() {

    return $this->hasOne('App\Cover');
  }

  public function song(){

    return $this->hasMany('App\Song');
  }

  public function genres() {

    return $this->belongsToMany('App\Genre');
  }
}
