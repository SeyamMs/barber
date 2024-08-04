<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email','code','phone','sms_reminder','message','service_duration','service_name','service_price','service_currency'
    ];
}
