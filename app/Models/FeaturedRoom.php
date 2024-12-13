<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedRoom extends Model
{
    use HasFactory;

    protected $fillable = ['featured_rooms'];
}
