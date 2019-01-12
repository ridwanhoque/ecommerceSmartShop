<?php

namespace smart_shop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = 
            ['category_name','category_description','publication_status'];
}
