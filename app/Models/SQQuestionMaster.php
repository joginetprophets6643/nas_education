<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SQQuestionMaster extends Model
{
    use HasFactory;
    protected $table = 'sq_question_master';
    protected $fillable = ['*'];
}
