<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateAchievementScore extends Model
{
    use HasFactory;
    protected $table = 'state_achievement_score';
    protected $fillable=['*'];
}
