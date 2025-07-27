<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function material() {
    return $this->belongsTo(Material::class);
}
public function fileType() {
    return $this->belongsTo(FileType::class);
}
}
