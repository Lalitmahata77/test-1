<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attributes\Fillable;

#[Fillable(['booking_id','service_id','quantity'])]
class BookingService extends Model
{
    //
}
