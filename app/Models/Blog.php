<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title_vi',
        'title_en',
        'short_description_vi',
        'short_description_en',
        'image',
        'slug',
        'content_vi',
        'content_en',
        'is_active',
    ];
}
