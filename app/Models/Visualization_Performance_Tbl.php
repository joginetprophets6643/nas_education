<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visualization_Performance_Tbl extends Model
{
    use HasFactory;
    protected $table = 'visualization_performance_tbl';
    protected $fillable = ['*'];
    public $timestamps = true;
}
