<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusArticle extends Model
{
    protected $guarded = ['id'];

    public function article()
    {
        return $this->hasOne(Article::class, 'article_id');
    }
}