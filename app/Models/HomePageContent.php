<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageContent extends Model
{
    protected $table = 'home_page_content';   

    protected $fillable = ['content_name', 'content_value'];

    
}
