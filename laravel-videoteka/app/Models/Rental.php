<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table = 'rentals';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function copies(){
        return $this->belongsToMany(Copy::class);
    }
}