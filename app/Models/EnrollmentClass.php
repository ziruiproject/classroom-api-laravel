<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class EnrollmentClass extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'enrollment_classes';
    protected $guarded = [];
    protected $dateFormat = 'U';

    public function studentClass(): HasOne
    {
        return $this->hasOne(StudentClass::class);
    }
}
