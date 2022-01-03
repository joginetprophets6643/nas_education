<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackData extends Model
{
    use HasFactory;
    protected $table = 'feedback_data';
    protected $fillable = ['*'];        
}
