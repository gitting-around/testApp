<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsfeed extends Model
{
    protected $table = 'Newsfeed';

    protected $fillable = [
        'title',
        'content',
        'author',
        'published_at'
    ];

}
