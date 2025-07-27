<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   
   public function department() {
    return $this->belongsTo(Department::class);
}
public function materials() {
    return $this->hasMany(Material::class);
}
}
