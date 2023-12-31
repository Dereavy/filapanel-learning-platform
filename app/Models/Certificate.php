<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'student_id',
    ];

    protected $casts = [

    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
