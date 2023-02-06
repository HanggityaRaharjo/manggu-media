<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentArticle extends Model
{
    protected $guarded = ['id'];
    public function component()
    {
        return $this->belongsTo(Component::class, 'component_id');
    }
    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
