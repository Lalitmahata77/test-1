<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['room_id','reference','check_in_date','check_out_date','discount','note','total_amount','status','user_id','hotel_id'])]
class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;
}
