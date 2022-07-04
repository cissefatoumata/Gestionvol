<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vols extends Model
{
    use HasFactory;
    protected $fillable = ['code','date_depart', 'heure_depart','place_affaire','place_business','prix_affaire', 'prix_business'];
}
