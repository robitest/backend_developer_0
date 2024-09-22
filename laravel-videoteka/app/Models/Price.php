<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    
    protected $table = 'cjenik';

    protected $fillable = ['tip-filma', 'cijena', 'zakasnina_po_danu'];
}
