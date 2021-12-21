<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NasExamDetails extends Model
{
    use HasFactory;
    protected $table = 'nas_exam_details';
    protected $fillable = ['*'];
    public function At3s()
    {
        return $this->hasMany(At3s::class,'state_id','state_cd');
    }    

}
