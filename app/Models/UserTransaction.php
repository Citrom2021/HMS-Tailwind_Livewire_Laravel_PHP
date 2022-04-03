<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        
            
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
            
}
