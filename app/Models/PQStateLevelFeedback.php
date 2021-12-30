<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PQStateLevelFeedback extends Model
{
    use HasFactory;
    protected $table = 'pq_state_level_feedback';
    protected $fillable = ['*'];

}
