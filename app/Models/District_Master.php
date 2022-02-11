<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District_Master extends Model
{
    use HasFactory;
    protected $table = 'district_masters';
    protected $fillable=[
        'district_id',
        'state_id',
        'state_name',
        'district_name',
        'udise_district_code',
        'udise_state_code',
        'inityear',
        'lgd_district_id',
        'lgd_state_id',
        'is_active',
        'year_id',
        'no_of_schools',
        'state_govt_schools',
        'govt_aided_schools',
        'central_govt_schools',
        'private_unaided_reco_schools',
        'teacher_state_govt_schools',
        'teacher_govt_aided_schools',
        'teacher_central_govt_schools',
        'teacher_private_unaided_reco_schools'
    ];

    public function DistrictParticipation()
    {
        return $this->hasMany(AllGradeParticipationTBL::class,'district_id','udise_district_code');
    } 
    public function DistrictLO()
    {
        return $this->hasMany(DistrictGradeLevelLearningOutCome::class,'district_id','udise_district_code');
    }
    public function DistrictFeedback()
    {
        return $this->hasMany(PQDistrictLevelFeedback::class,'district_id','udise_district_code');
    }

}
