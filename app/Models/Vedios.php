<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vedios extends Model
{
    use HasFactory;
    protected $fillable = [
        'vedio',
        'status'
    ];
}
