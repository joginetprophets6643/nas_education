<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AT3PerformanceData extends Model
{
    use HasFactory;
    protected $table = 'at3_performance_data';
    protected $fillable = ['*'];
    public $timestamps = true;

}
