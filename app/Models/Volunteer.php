<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;
    protected $guarded = 'id';

    protected $fillable = ['title', 'slug', 'description', 'location', 'time' ];

    public function opportunity() {
        return $this->hasMany(Opportunity::class);
    }
}
