<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
     public function course() {
        return $this->belongsTo(Course::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function assets() {
        return $this->hasMany(Asset::class);
    }
     protected $fillable = [
        'material_id',
        'course_id',
        'category_id',
        'title',
        'description',
        'state',
    ];
}
