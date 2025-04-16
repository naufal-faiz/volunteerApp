<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = 'id';

    public function volunteers() {
        return $this->belongsToMany(Volunteer::class, 'opportunities', 'category_id', 'volunteer_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
