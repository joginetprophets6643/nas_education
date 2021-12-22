<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Static_Content extends Model
{
    use HasFactory;
    protected $table = 'static_contents';
    protected $fillable=[
        'language',
        'page_title',
        'home_page_content',
        'inner_page_content',
        'page_meta_title',
        'page_meta_description',
    ];
}
