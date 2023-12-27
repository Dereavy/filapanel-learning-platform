<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'description', 'instructor_id',
    ];

    protected $casts = [

    ];

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
