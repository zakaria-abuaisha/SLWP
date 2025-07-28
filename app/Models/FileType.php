<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileType extends Model
{
    public function assets()
    {
        return $this->hasMany(Asset::class, 'file_type_id');
    }

    protected $fillable = [
        'file_type_id',
        'name',
    ];
}
