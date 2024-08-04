<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $fillable= ['name','time'];
    
    public function services()
    {
        return $this->belongsToMany(Service::class, 'day_service', 'day_id', 'service_id');
    }
}
