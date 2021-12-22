<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Images extends Model
{
    use HasFactory;
    protected $fillable=[
        'event_id',
        'images'
    ];
}
