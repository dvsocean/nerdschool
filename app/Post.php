<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
    	'user_id',
    	'title',
    	'topic',
        'discussion_date',
    	'post',
    	'pic_id',
        'posted_by'
    ];

    public function user(){
    	$this->belongsTo('App\User');
    }

    public function profile_pic(){
        return $this->belongsTo('App\Photo');
    }

    public function images(){
        return $this->hasMany('App\Image_post');
    }
}