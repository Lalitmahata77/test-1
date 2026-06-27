<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'email','address','phone','hotel_id'])]
class Guest extends Model
{
    /** @use HasFactory<\Database\Factories\GuestFactory> */
    use HasFactory;
}
