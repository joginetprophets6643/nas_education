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

}
