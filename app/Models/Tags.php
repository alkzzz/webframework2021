<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    public function news()
    {
        return $this->belongsToMany(News::class, 'new_tag', 'tag_id', 'new_id');
    }
}
