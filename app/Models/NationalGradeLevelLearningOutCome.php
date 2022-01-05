<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalGradeLevelLearningOutCome extends Model
{
    use HasFactory;
    protected $table = 'national_grade_level_learningoutcome';
    protected $fillable = ['*'];
    public $timestamps = true;  
}
