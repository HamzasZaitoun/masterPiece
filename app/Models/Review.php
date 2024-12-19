<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use
        HasFactory,
        SoftDeletes;
    protected $fillable = ['user_id', 'rating', 'review_text', 'is_approved', 'reply_text'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
