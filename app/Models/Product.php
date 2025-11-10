<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'category',
        'model',
        'battery_type',
        'capacity_range',
        'cycle_life',
        'float_life',
        'self_discharge',
        'operational_temperature',
        'efficency',
        'construction',
        'quality_control',
        'certification',
        'eco_initiative',
        'life_expectancy',
        'image',
        'key_feature',
        'application',
        'brochure',
    ];
}
