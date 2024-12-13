<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'review_id';
    protected $fillable = ['user_id', 'room_id', 'rating', 'review_text', 'review_date'];

    // Relation avec User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // Relation avec Room
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'room_id');
    }
}

