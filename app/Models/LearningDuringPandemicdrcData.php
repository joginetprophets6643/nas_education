<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningDuringPandemicdrcData extends Model
{
    use HasFactory;
    protected $table = 'learning_during_pandemic_drc_data';
    protected $fillable = ['*'];        
}
