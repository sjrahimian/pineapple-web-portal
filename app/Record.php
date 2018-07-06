<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model{

  // Define table name
  protected $table = 'records';

  //
  public function image(){
    return $this->hasOne('App\ImageURL', 'id');
  }

}
