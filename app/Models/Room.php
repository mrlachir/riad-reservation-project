<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_id';
    protected $fillable = ['name', 'description', 'price', 'availability', 'images', 'room_type'];

    // Relation avec les bookings
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'room_id', 'room_id');
    }

    // Relation avec les reviews
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'room_id', 'room_id');
    }
}

