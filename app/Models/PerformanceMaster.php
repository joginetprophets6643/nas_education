<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceMaster extends Model
{
    use HasFactory;
    protected $table = 'performance_master';
    protected $fillable = ['*'];

}
