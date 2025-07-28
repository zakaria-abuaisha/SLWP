<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function courses() {
    return $this->hasMany(Course::class);
}
 
    protected $fillable = [
        'department_id',
        'name',
        'code',
    ];
}
