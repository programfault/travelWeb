<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class WebsiteConfig extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'website_config';
    
}
