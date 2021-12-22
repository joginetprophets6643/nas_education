<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State_Master extends Model
{
    use HasFactory;
    protected $table = 'state_masters';
    protected $fillable=[
        'state_id',
        'state_name',
        'udise_state_code',
        'lgd_state_id',
        'is_active',
        'status',
        'is_ut',
        'view_order',
    ];
}
