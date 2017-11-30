<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParsedNews extends Model
{
    protected $table = 'parsed_news';

    protected $fillable = ['title', 'date', 'article_url', 'views', 'tags'];
}
