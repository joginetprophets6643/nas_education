<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DummyAt10s extends Model
{
    use HasFactory;
    protected $table = 'dummy_at10s';
    protected $fillable = ['*'];
}
