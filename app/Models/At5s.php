<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class At5s extends Model
{
    use HasFactory;
    protected $table = 'at5s';
    protected $fillable = ['sq_scan', 'at5_bar', 'at5_parent_bar', 'at5_udise','state_id','district_id', 'at5_set', 'at5_grade', 'at5_sect', 'at5_nasid', 'at5_socgrp', 'at5_cwd', 'at5_q01', 'at5_q02', 'at5_q03', 'at5_q04', 'at5_q05', 'at5_q06', 'at5_q07', 'at5_q08', 'at5_q09', 'at5_q10', 'at5_q11', 'at5_q12', 'at5_q13', 'at5_q14', 'at5_q15', 'at5_q16', 'at5_q17', 'at5_q18', 'at5_q19', 'at5_q20', 'at5_q21', 'at5_q22', 'at5_q23', 'at5_q24', 'at5_q25', 'at5_q26', 'at5_q27', 'at5_q28', 'at5_q29', 'at5_q30', 'at5_q31', 'at5_q32', 'at5_q33', 'at5_q34', 'at5_q35', 'at5_q36', 'at5_q37', 'at5_q38', 'at5_q39', 'at5_q40', 'at5_q41', 'at5_q42', 'at5_q43', 'at5_q44', 'at5_q45', 'at5_q46', 'at5_q47', 'at5_q48', 'at5_q49', 'at5_q50', 'at5_q51', 'at5_q52', 'at5_q53','right_count','percentage'];

    public function NasExamDetails()
    {
        return $this->belongsTo(NasExamDetails::class,'at5_udise','udise_sch_code');
    }    
    public function PQDetails()
    {
        return $this->belongsTo(PQs::class,'at5_parent_bar','pq_bar');
    } 
}
