<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class At8s extends Model
{
    use HasFactory;
    protected $table = 'at8';
    protected $fillable = ['sq_scan', 'at8_bar', 'at8_parent_bar', 'at8_udise','state_id','district_id', 'at8_set', 'at8_grade', 'at8_sect', 'at8_nasid', 'at8_socgrp', 'at8_cwd', 'at8_q01', 'at8_q02', 'at8_q03', 'at8_q04', 'at8_q05', 'at8_q06', 'at8_q07', 'at8_q08', 'at8_q09', 'at8_q10', 'at8_q11', 'at8_q12', 'at8_q13', 'at8_q14', 'at8_q15', 'at8_q16', 'at8_q17', 'at8_q18', 'at8_q19', 'at8_q20', 'at8_q21', 'at8_q22', 'at8_q23', 'at8_q24', 'at8_q25', 'at8_q26', 'at8_q27', 'at8_q28', 'at8_q29', 'at8_q30', 'at8_q31', 'at8_q32', 'at8_q33', 'at8_q34', 'at8_q35', 'at8_q36', 'at8_q37', 'at8_q38', 'at8_q39', 'at8_q40', 'at8_q41', 'at8_q42', 'at8_q43', 'at8_q44', 'at8_q45', 'at8_q46', 'at8_q47', 'at8_q48', 'at8_q49', 'at8_q50', 'at8_q51', 'at8_q52', 'at8_q53', 'at8_q54', 'at8_q55', 'at8_q56', 'at8_q57', 'at8_q58', 'at8_q59', 'at8_q60','right_count','percentage'];

    public function NasExamDetails()
    {
        return $this->belongsTo(NasExamDetails::class,'at8_udise','udise_sch_code');
    }    
    public function PQDetails()
    {
        return $this->belongsTo(PQs::class,'at8_parent_bar','pq_bar');
    } 

}
