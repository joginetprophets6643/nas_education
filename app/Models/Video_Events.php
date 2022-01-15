<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_Events extends Model
{
    use HasFactory;
    protected $table = 'video_events';
    protected $fillable=[
        'name',
    ];
}
