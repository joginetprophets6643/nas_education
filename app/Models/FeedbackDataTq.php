<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackDataTq extends Model
{
    use HasFactory;
    protected $table = 'feedback_data_tq';
    protected $fillable = ['*'];        
}
