<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $guarded = ['id'];
    public function component_article()
    {
        return $this->hasMany(ComponentArticle::class, 'component_id');
    }
}