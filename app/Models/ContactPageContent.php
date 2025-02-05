<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPageContent extends Model
{
    protected $table = 'contact_page_content';   

    protected $fillable = ['content_name', 'content_value'];
    
}
