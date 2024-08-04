<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateBarber extends Model
{
    use HasFactory;
    protected $fillabel = [
        'name','date','time','status'
    ];
}
