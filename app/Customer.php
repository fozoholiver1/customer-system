<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $guarded=[];
  protected $attributes=[

    'active'=>1 // default value for the active field
  ];

  public function company(){
    return $this->belongsTo(Company::class);
}

public function scopeActive($query){//the scope for active data fields from our db

    return $query->where('active','1');
}
public function scopeInactive($query){//the scope for active data fields from our db

    return $query->where('active','0');
}

public function getActiveAttribute($attribute){//restful controller for active and inactive status

    return $this->activeOption()[$attribute];
}

 public function activeOption()// we can use this feature to add new statuses for our customers eg.   2=>'In_progress',
{
    return [
        1=>'Active',
        0=>'Inactive',
        2=>'In_progress'
    ];

}
}
