<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PqAnswerKey extends Model
{
    use HasFactory;
    protected $table = 'pqnaswerkey';
    protected $fillable = ['*'];
}
