<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
       'category_id',
       'photo_id',
        'user_id',
       'title',
       'body'
    ];
  public function user(){
      return $this->belongsTo('App\User');

  }
    public function photo(){
        return $this->belongsTo('App\Photo');
  }

    public function Category(){
        return $this->belongsTo('App\Category');

    }


}
