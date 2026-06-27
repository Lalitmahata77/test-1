<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Service;
use App\Models\Booking;
use App\Models\BookingGuest;
use App\Models\BookingService;
use App\Models\Payment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ])
       
        $user =[
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
              
            ],
            [
                'name' => 'Manager1 User',
                'email' => 'manager1@example.com',
                'password' => Hash::make('password'),
                'role' => 'manager',
            ],
            [
                'name' => 'Manager2 User',
                'email' => 'manager2@example.com',
                'password' => Hash::make('password'),
                'role' => 'manager',
            ],

        ];
        User::factory()->createMany($user);

        $hotel = [
            [
                'name' => 'Hotel1',
                'email' => 'hotel1@example.com',
              
            ],
            [
                'name' => 'Hotel2',
                'email' => 'hotel2@example.com',
              
            ],
        ];
        Hotel::factory()->createMany($hotel);
        $room = [
            [
                'name' => 'Room1',
                'price' => 100,
                'hotel_id' => 1,
            ],
            [
                'name' => 'Room2',
                'price' => 200,
                'hotel_id' => 2,
            ],
            
        ];
        Room::factory()->createMany($room);
        $guest = [
            [
                'name' => 'Guest1',
                'email' => 'guest1@example.com',
                'address' => '123 Main St, Anytown, USA',
                'phone' => '1234567890',
                'hotel_id' => 1,
            ],
            [
                'name' => 'Guest2',
                'email' => 'guest2@example.com',
                'address' => '456 Main St, Anytown, USA',
                'phone' => '1234567890',
                'hotel_id' => 2,
            ],
            [
                'name' => 'Guest3',
                'email' => 'guest3@example.com',
                'address' => '789 Main St, Anytown, USA',
                'phone' => '1234567890',
                'hotel_id' => 1,
            ],
        ];
        Guest::factory()->createMany($guest);
        $service = [
            [
                'name' => 'Service1',
                'price' => 100,
                'hotel_id' => 1,
            ],
            [
                'name' => 'Service2',
                'price' => 200,
                'hotel_id' => 2,
            ],
           
        ];
        Service::factory()->createMany($service);
        $booking = [
            [
                'room_id' => 1,
                'reference' => '1234567890',
                'check_in_date' => '2026-01-01',
                'check_out_date' => '2026-01-02',
                'discount' => 10,
                'user_id' => 1,
                'hotel_id' => 1,
            ],
            [
                'room_id' => 2,
                'reference' => '1234567890',
                'check_in_date' => '2026-01-01',
                'check_out_date' => '2026-01-02',
                'discount' => 10,
                'user_id' => 1,
                'hotel_id' => 2,
            ],
        ];
        Booking::factory()->createMany($booking);
      
        $payment = [
            [
                'booking_id' => 1,
                'amount_paid' => 100,
                'user_id' => 1,
                'hotel_id' => 1,
            ],
        ];
        Payment::factory()->createMany($payment);
    }
}
