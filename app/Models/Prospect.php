<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prospect extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['nom','prenom','societe','fonction','adresse','telephone','email','site_web','source','statut'];

}
