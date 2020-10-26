<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $table='voitures';

    protected $fillable=[
        'nom',
        'matricule',
        'prix',
    ];
    
}
