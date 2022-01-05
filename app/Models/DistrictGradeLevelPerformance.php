<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictGradeLevelPerformance extends Model
{
    use HasFactory;
    protected $table = 'district_grade_level_performance';
    protected $fillable = ['*'];
    public $timestamps = true;
}
