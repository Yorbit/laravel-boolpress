<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    protected $fillable = [
        "title",
        "content",
        "category_id"
    ];

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function category() {
        return $this->belongsTo("App\Models\Admin\Category");
    }

    public function tags() {
    return $this->belongsToMany("App\Models\Admin\Tag");
    }
}