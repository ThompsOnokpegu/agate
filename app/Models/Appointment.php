<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'services',
        'appointment_date',
        'first_name',
        'last_name',
        'phone',
        'email',
        'note',
    ];
}
