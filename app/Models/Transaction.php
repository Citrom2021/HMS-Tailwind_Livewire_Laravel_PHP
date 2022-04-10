<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        
            'room_id',
            'user_id',
            'user_name',
            'email',
            'phone',           
            'room_name',
            'checkin',
            'checkout',
            'days',
            'bill',
            'halfboard',
            'number_of_guests',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Room()
    {
        return $this->belongsTo(Room::class);
    }
            
}
