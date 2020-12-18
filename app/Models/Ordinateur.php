<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordinateur extends Model
{
    use HasFactory;

    public function Attributions()
    {
        return $this->hasMany(Attribution::class);
    }




}
