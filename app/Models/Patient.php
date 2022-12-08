<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $with = ['addresses'];

    public function addresses() {
        return $this->belongsToMany(Address::class, 'patient_address');
    }
}
