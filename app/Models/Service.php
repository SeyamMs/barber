<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable= ['name','duration','price','currency','image'];
    public function days()
    {
        return $this->belongsToMany(Day::class, 'day_service', 'service_id', 'day_id');
    }
}
