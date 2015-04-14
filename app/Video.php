<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'Videos';

    protected $fillable = [
        'title',
        'description',
        'author',
        'published_at'
    ];
}
