<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllGradeParticipationTBL extends Model
{
    use HasFactory;
    protected $table = 'all_grade_participation_tbl';
    protected $fillable = ['state_id', 'district_id', 'grade', 'rural_location','urban_location','govt_school', 'govt_aided_school', 'private_school', 'central_govt_school', 'total_school', 'total_student', 'sc_social_group', 'obc_social_group', 'st_social_group', 'general_social_group', 'total_teacher', 'male_gender', 'female_gender'];


}
