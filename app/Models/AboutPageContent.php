<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPageContent extends Model
{
    protected $table = 'about_page_content';   

    protected $fillable = ['content_name', 'content_value'];
    
}
