<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[
        'website_title',
        'contact_us',
        'logo_1',
        'logo_2',
        'email_to',
        'meta_title',
        'meta_description',
        'fb',
        'twitter',
        'insta',
    ];
}
