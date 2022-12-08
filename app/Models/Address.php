<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $with = ['island'];

    public function island() {
        return $this->belongsTo(Island::class);
    }

    public function patients() {
        return $this->belongsToMany(Patient::class, 'patient_address');
    }
}
