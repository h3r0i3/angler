<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //nazwa tabeli
    protected $table = 'posts';
    //Primary key
    public $primaryKey = '$id';
    //Timestamps
    public $timestamps = true;
    

}
