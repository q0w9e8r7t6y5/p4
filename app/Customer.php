<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     public function books() {
        return $this->hasMany('App\Customer');
    }

    public function getFullName() {
       return $this->first_name.' '.$this->last_name;
   }

     public static function getForDropdown() {
        return Customer::orderBy('last_name')->select(['id', 'first_name', 'last_name'])->get();
    }
}
