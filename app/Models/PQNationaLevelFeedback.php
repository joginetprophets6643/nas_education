<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PQNationaLevelFeedback extends Model
{
    use HasFactory;
    protected $table = 'pq_national_level_feedback';
    protected $fillable = ['*'];

}
