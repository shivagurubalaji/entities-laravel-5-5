<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModxContent extends Model
{
    use HasFactory;

    protected $table = 'modx_site_content';

    protected $fillable = [
        'type',
        'contenttype',
        'pagetitle',
        'longtitle',
        'description',
        'alias',
        'alias_visible',
        'link_attributes',
        'published',
        'pub_date',
        'unpub_date',
        'parent',
        'isfolder',
        'introtext',
        'content',
        'richtext',
        'template',
        'menuindex',
        'searchable',
        'cacheable',
        'createdby',
        'createdon',
        'editedby',
        'editedon',
        'deleted',
        'deletedon',
        'deletedby',
        'publishedon',
        'publishedby',
        'menutitle',
    ];

}
