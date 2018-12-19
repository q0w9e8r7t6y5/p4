<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public function getFullName() {
       return $this->first_name.' '.$this->last_name;
   }

   public function orders() {
       return $this->belongsToMany('App\Order')->withTimestamps();
   }

     public static function getForDropdown() {
        return Customer::orderBy('last_name')->select(['id', 'first_name', 'last_name'])->get();
    }
}
