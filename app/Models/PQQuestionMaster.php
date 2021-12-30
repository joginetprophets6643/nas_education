<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PQQuestionMaster extends Model
{
    use HasFactory;
    protected $table = 'pq_question_master';
    protected $fillable = ['*'];
}
