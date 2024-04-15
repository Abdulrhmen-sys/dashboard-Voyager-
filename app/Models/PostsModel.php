<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
    use HasFactory;
    protected $fillable = ['post_name' , 'post_description' , 'post_content' , 'post_subtitle','post_create'];
}
