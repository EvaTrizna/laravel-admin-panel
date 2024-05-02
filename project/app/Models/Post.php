<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function imgpreview()
    {
        return $this->belongsTo('App\Models\ImgPreview', 'img_preview_id');
    }
}
