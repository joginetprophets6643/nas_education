<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataInfo extends Model
{
    use HasFactory;
    protected $fillable=['id','type_id','acc_year','type','file_name','file_description','file_table','created_at','updated_at'];
}
