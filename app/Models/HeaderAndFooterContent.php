<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderAndFooterContent extends Model
{
    protected $table = 'header_and_footer_content'; 
    
    protected $fillable = ['content_name', 'content_value'];
    
}
