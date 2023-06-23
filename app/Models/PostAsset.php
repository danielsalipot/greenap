<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAsset extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'asset_url'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
