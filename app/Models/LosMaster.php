<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LosMaster extends Model
{
    use HasFactory;
    protected $fillable=[
        'lo_id',
        'lo_desc',
        'grade',
        'subject',
    ];
}
