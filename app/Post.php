<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'name',
        'body',
        'status',
        'cover_pic',
        
  
      ];
}
