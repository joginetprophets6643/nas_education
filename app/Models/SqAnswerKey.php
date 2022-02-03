<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SqAnswerKey extends Model
{
    use HasFactory;
    protected $table = 'sqanswerkey';
    protected $fillable = ['*'];
}
