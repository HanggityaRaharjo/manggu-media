<?php

namespace App\Models;

// use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function article_status()
    {
        return $this->hasOne(StatusArticle::class, 'article_id');
    }
    public function comments()
    {
        return $this->hasMany(Komentar::class, 'article_id');
    }
    public function component_artile()
    {
        return $this->hasMany(ComponentArticle::class, 'component_id');
    }
}
