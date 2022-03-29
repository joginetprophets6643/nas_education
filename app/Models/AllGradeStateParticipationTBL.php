<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllGradeStateParticipationTBL extends Model
{
    use HasFactory;
    protected $table = 'all_grade_state_participation_tbl';
    protected $fillable = ['*'];
    public $timestamps = true;

    public function StatePerformance()
    {
        return $this->hasMany(StateGradeLevelPerformance::class,'state_id','state_id');
    }  
}
