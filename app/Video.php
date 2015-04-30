<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'Videos';

    protected $fillable = [
        'title',
        'description',
        'author',
        'image_url',
        'video_url',
        'format_film',
        'published_at'
    ];
}
