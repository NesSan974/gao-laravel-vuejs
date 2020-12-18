<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Attribution extends Model
{
    use HasFactory;



    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function ordinateur()
    {
        return $this->belongsTo(Ordinateur::class);
    }

}