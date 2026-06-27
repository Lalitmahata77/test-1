<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['booking_id','guest_id','hotel_id'])]
class BookingGuest extends Model
{
    //
}
