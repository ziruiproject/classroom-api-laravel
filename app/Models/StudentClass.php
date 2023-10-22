<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class StudentClass extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = [];
    protected $dateFormat = 'U';

    public function enrollmentClass(): BelongsTo
    {
        return $this->belongsTo(EnrollmentClass::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
