<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guard extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function values(){
        return $this->hasOne(Guard_Service_Provider::class);
    }
}
