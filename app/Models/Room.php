<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'number', 'price', 'type', 'status', 'hotel_id',])]
class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;
}
