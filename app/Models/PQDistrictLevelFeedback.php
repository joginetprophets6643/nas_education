<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PQDistrictLevelFeedback extends Model
{
    use HasFactory;
    protected $table = 'pq_district_level_feedback';
    protected $fillable = ['*'];

}
