<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;
    protected $guarded = 'id';

    protected $fillable = ['title', 'slug', 'description', 'location', 'time' ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'opportunities', 'volunteer_id', 'category_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
