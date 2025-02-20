<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    /* n - 1 */
    public function user ()
    {
        return $this->belongsto(User::class);
    }

    /* 1 - n */
    public function images ()
    {
        return $this->hasMany(Image::class);
    }

    /* n - n */
    public function tags ()
    {
        return $this->belongsToMany(Tag::class)->using(BlogTag::class);
    }
}

