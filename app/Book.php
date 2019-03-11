<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

  protected $fillable = [
    'title', 'author_id','type_id'
  ];

  public function type()
  {
    return $this->hasOne('App\Type', 'id', 'type_id');
  }

  public function author()
  {
    return $this->hasOne('App\Author', 'id', 'author_id');
  }

}
