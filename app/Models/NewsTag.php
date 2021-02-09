<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
    protected $fillable = ['*'];
    use HasFactory;

    public function tags()
    {
        return $this->hasOne(Tag::class);
    }

    public function news()
    {
        return $this->hasOne(News::class);
    }
}
