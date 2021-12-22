<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalStatistic extends Model
{
    use HasFactory;
    protected $table = 'national_statistic';
    protected $fillable=[
        'total_district_area',
        'total_population',
        'rural_population',
        'urban_population',
        'density_of_population',
        'literacy_rate',
        'child_sex_ratio'
    ];
}
