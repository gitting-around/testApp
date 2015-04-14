<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'Projects';

    protected $fillable = [
        'title',
        'description',
        'author',
        'published_at'
    ];
}
