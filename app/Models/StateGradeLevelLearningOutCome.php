<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateGradeLevelLearningOutCome extends Model
{
    use HasFactory;
    protected $table = 'state_grade_level_learningoutcome';
    protected $fillable = ['*'];
    public $timestamps = true;  

}
