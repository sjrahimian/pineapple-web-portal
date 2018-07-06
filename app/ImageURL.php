<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageURL extends Model{

  // Define table name
  protected $table = 'imageurls';

  //
  public function record(){
    return $this->belongsTo('App\Record', 'id');
  }

}
