<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllGradeParticipationTBL extends Model
{
    use HasFactory;
    protected $table = 'all_grade_participation_tbl';
    protected $fillable = ['*'];
    public $timestamps = true;

    public function DistrictPerformance()
    {
        return $this->hasMany(PerformanceMaster::class,'district_id','district_id');
    }    
    public function LearningDuringPandemicdrcData()
    {
        return $this->hasMany(LearningDuringPandemicdrcData::class,'dist_code','district_id');
    }
}
