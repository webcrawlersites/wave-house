<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'property_title',
        'properry_description',
        'property_image',
        'bedrooms',
        'bathrooms',
        'square_feet',
        'finished_basement',
        'prop_tax',
        'heat_type',
        'water_heater',
        'year_built'
    ];

}
