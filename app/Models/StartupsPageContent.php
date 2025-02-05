<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StartupsPageContent extends Model
{
    protected $table = 'startups_page_content';   

    protected $fillable = ['content_name', 'content_value'];
    
}
