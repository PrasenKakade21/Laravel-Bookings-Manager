<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'name',
        'user_id',
        'booking_datetime',
        'status',
    ];
}
