<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'uploads';
    protected $fillable = ['sq_scan', 'at3_bar', 'at3_udise', 'at3_set', 'at3_grade', 'at3_sect', 'at3_nasid', 'at3_socgrp', 'at3_cwd', 'at3_q01', 'at3_q02', 'at3_q03', 'at3_q04', 'at3_q05', 'at3_q06', 'at3_q07', 'at3_q08', 'at3_q09', 'at3_q10', 'at3_q11', 'at3_q12', 'at3_q13', 'at3_q14', 'at3_q15', 'at3_q16', 'at3_q17', 'at3_q18', 'at3_q19', 'at3_q20', 'at3_q21', 'at3_q22', 'at3_q23', 'at3_q24', 'at3_q25', 'at3_q26', 'at3_q27', 'at3_q28', 'at3_q29', 'at3_q30', 'at3_q31', 'at3_q32', 'at3_q33', 'at3_q34', 'at3_q35', 'at3_q36', 'at3_q37', 'at3_q38', 'at3_q39', 'at3_q40', 'at3_q41', 'at3_q42', 'at3_q43', 'at3_q44', 'at3_q45', 'at3_q46', 'at3_q47'];
}
