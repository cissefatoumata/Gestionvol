<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passagers extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom', 'sexe','type','prix','vol_id'];
}
