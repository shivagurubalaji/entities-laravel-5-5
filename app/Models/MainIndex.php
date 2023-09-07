<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainIndex extends Model
{
    use HasFactory;

    protected $table = 'main_index';

    protected $fillable = [
        'page_uri',
        'page_id',
        'page_title',
        'page_description',
        'page_long_title',
        'template_id',
        'template_name'
    ];

}
