<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    // Mass assigned
    protected $fillable = ['id', 'title', 'slug', 'published', 'meta_title', 'meta_description', 'meta_keyword', 'published', 'created_by', 'created_at', 'updated_at', 'modified_by'];

    // Mutators
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
      }
}
