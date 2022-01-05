<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackDataSq extends Model
{
    use HasFactory;
    protected $table = 'feedback_data_sq';
    protected $fillable = ['*'];        
}
