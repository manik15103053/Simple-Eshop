<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class student extends Model
{
    use HasFactory;
    use softDeletes;

    public function category(){

        return $this->belongsTo(Category::class);
    }
}
