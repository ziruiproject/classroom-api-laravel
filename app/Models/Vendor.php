<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dateFormat = 'U';

    protected $casts = [
        'created_at' => 'integer',
        'updated_at' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
