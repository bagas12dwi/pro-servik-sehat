<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    
}
