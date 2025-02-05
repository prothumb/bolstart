<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorsPageContent extends Model
{
    protected $table = 'investors_page_content';   

    protected $fillable = ['content_name', 'content_value'];
    
}
