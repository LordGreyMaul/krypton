<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $fillable = [
        'title',
        'body',
        'priority',
        'completed',
        'published_at'
    ];

    protected $dates = ['published_at'];

    //Get all published tasks by date
    public function scopePublished($query)
    {
        $query->where('published_at' , '<=' , Carbon::now());
    }
    //Get all unpublished or future tasks
    public function scopeUnpublished($query)
    {
        $query->where('published_at' , '>=' , Carbon::now());
    }
    // Set form to publish tasks with a time and date in the Published_at field
    public function setPublichedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d' , $date);
    }
}
