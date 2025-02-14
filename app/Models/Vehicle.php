<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Vehicle extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner');
    }
}
