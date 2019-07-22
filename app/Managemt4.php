<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Managemt4 extends Model {
  public static function getuserData(){
    $value=DB::table('')->orderBy('id', 'asc')->get();
    return $value;
  }
}