<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function location()
    {
        return $this->belongsTo(HealthCenter::class, 'health_center_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function identityHistory()
    {
        return $this->hasOne(IdentityHistory::class);
    }

    public function kesehatan()
    {
        return $this->hasOne(HealthHistory::class);
    }

    public function keluarga()
    {
        return $this->hasOne(FamilyHistory::class);
    }

    public function keluhan()
    {
        return $this->hasOne(Complaint::class);
    }

    public function breastExamination()
    {
        return $this->hasOne(BreastExamination::class);
    }

    public function ginekologiExamination()
    {
        return $this->hasOne(GinekologiExamination::class);
    }

    public function krioterapi()
    {
        return $this->hasOne(Krioterapi::class);
    }
}
