<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nrc3Datas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'grade3nationaltable';
    protected $fillable=[
    "id",
    "state_code",
    "state_name",
    "subject",
    "ss",
    "se",
    "indicator",
    "government",
    "government_aided",
    "se_govt",
    "se_govt_aided",
    "govt_indicator",
    "private",
    "se_private",
    "prvt_indicator",
    "central_govt",
    "se_central_govt",
    "cent_govt_indicator",
    "ssb",
    "ssg",
    "seb",
    "seg",
    "gender_indicator",
    "rural_ss",
    "rural_se",
    "urban_ss",
    "urban_se",
    "area_wise_indicator",
    "general",
    "sc",
    "se_gen",
    "se_sc",
    "gen_indicator",
    "st",
    "se_st",
    "st_indicator",
    "obc",
    "se_obc",
    "obc_indicator"
    ];
}
