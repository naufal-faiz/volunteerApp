<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    public function volunteer() {
        return $this->belongsTo(Volunteer::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
