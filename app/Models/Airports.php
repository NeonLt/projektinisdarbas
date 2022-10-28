<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
    use HasFactory;

    protected $fillable = ['name_ava', 'country_name', 'latitude', 'longtitude', 'country_id', 'airline_pavadinimas'];
}
