<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'description', 'status', 'visibility', 'featured', 'revisions'];

    public function assets()
    {
        return $this->hasMany(PostAsset::class);
    }
}
