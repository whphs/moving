<?php

use App\User;
use App\Models\Area;
use App\Models\Bonus;
use App\Models\Scale;
use App\Models\AboutUs;
use App\Models\Booking;
use App\Models\Vehicle;
use App\Models\MoveType;
use App\Models\Agreement;
use App\Models\FloorPrice;
use App\Models\DistancePrice;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User
        User::create([
            'name'      => 'Admin',
            'phone'     => '13394260131',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin'),
            'role_id'   => 0,
        ]);

        // Area
        Area::create([
            'name'      => 'Dandong',
            'country'   => 'China',
            'zip_code'  => '118000'
        ]);

        // MoveType
        MoveType::create([
            'name'      => 'Easy Move',
            'area_id'   => 1,
        ]);
        MoveType::create([
            'name'      => 'Safe Move',
            'area_id'   => 1,
        ]);

        // Booking
        Booking::create([
            'user_id'       => 1,
            'vehicle_id'    => 1,
            'where_from'    => 'Dandong',
            'floor_from'    => 1,
            'where_to'      => 'ShenYang',
            'floor_to'      => 9,
            'when'          => date('Y-m-d H:i:s'),
            'distance'      => 10,
            'price'         => 500,
            'description'   => 'This is Easy Move.',
            'big_item'      => 2,
            'helper_count'  => 3,
            'photo_0'       => 'uploads/bus00.png',
            'photo_1'       => 'uploads/bus01.png',
            'photo_2'       => 'uploads/bus02.png',
            'phone'         => '13394260131',
        ]);
        Booking::create([
            'user_id'       => 1,
            'scale_id'      => 1,
            'where_from'    => 'Dandong',
            'floor_from'    => 1,
            'where_to'      => 'ShenYang',
            'floor_to'      => 9,
            'when'          => date('Y-m-d H:i:s'),
            'distance'      => 10,
            'price'         => 500,
            'description'   => 'This is Safe Move.',
            'big_item'      => 2,
            'helper_count'  => 3,
            'photo_0'       => 'uploads/bus10.png',
            'photo_1'       => 'uploads/bus11.png',
            'photo_2'       => 'uploads/bus12.png',
            'phone'         => '13394260131',
        ]);

        // AboutUs
        AboutUs::create([
            'title'         => 'About This App',
            'introduction'  => 'This App is to move your baggage',
            'email'         => 'admin@gmail.com',
            'phone'         => '13394260131',
            'address'       => 'Dandong, China',
            'website'       => 'http://www.baidu.com'
        ]);

        // Agreement
        Agreement::create([
            'content'   => '<h4>About This App</h4><p>After screwing up my first booking in Dubai they rebooked me into another hotel and confirmed by email to me Upon arrival though the second hotel never received any confirmation and so no booking</p>',
        ]);

        // Bonus
        Bonus::create([
            'title'         => 'Test Bonus 1',
            'price'         => 10,
            'start_date'    => date('d/m/Y'),
            'end_date'      => date('d/m/Y'),
            'description'   => 'This is test Bonus',
        ]);
        Bonus::create([
            'title'         => 'Test Bonus 2',
            'price'         => 10,
            'start_date'    => date('d/m/Y'),
            'end_date'      => date('d/m/Y'),
            'description'   => 'This is test Bonus',
        ]);

        // Vehicle
        Vehicle::create([
            'name'                          => 'Small Bus',
            'move_type_id'                  => 1,
            'area_id'                       => 1,
            'size'                          => '2m * 2m * 2m',
            'load_weight'                   => '500kg',
            'volume'                        => '2',
            'init_distance'                 => 5,
            'init_price'                    => 30,
            'init_price_for_items'          => 30,
            'price_per_floor'               => 15,
            'price_per_big_item'            => 25,
            'price_per_floor_for_big_item'  => 3,
            'description'                   => 'This is test bus',
            'available_items'               => 'things less than 2m height',
            'unavailable_items'             => 'things more than 2m height',
            'vehicle_thumb'                 => 'uploads/bus_thumb0.png',
            'baggage_thumb'                 => 'uploads/baggage_thumb0.png',
            'photo_0'                       => 'uploads/bus00.png',
            'photo_1'                       => 'uploads/bus01.png',
            'photo_2'                       => 'uploads/bus02.png',
        ]);
        Vehicle::create([
            'name'                          => 'Menium Bus',
            'move_type_id'                  => 1,
            'area_id'                       => 1,
            'size'                          => '3m * 3m * 3m',
            'load_weight'                   => '1,000kg',
            'volume'                        => '3',
            'init_distance'                 => 5,
            'init_price'                    => 55,
            'init_price_for_items'          => 50,
            'price_per_floor'               => 22,
            'price_per_big_item'            => 25,
            'price_per_floor_for_big_item'  => 3,
            'description'                   => 'This is test bus',
            'available_items'               => 'things less than 3m height',
            'unavailable_items'             => 'things more than 3m height',
            'vehicle_thumb'                 => 'uploads/bus_thumb1.png',
            'baggage_thumb'                 => 'uploads/baggage_thumb1.png',
            'photo_0'                       => 'uploads/bus10.png',
            'photo_1'                       => 'uploads/bus11.png',
            'photo_2'                       => 'uploads/bus12.png',
        ]);
        Vehicle::create([
            'name'                          => 'Small Truck',
            'move_type_id'                  => 1,
            'area_id'                       => 1,
            'size'                          => '4m * 4m * 4m',
            'load_weight'                   => '1,500kg',
            'volume'                        => '4',
            'init_distance'                 => 5,
            'init_price'                    => 65,
            'init_price_for_items'          => 120,
            'price_per_floor'               => 40,
            'price_per_big_item'            => 25,
            'price_per_floor_for_big_item'  => 3,
            'description'                   => 'This is test bus',
            'available_items'               => 'things less than 4m height',
            'unavailable_items'             => 'things more than 4m height',
            'vehicle_thumb'                 => 'uploads/bus_thumb2.png',
            'baggage_thumb'                 => 'uploads/baggage_thumb2.png',
            'photo_0'                       => 'uploads/bus20.png',
            'photo_1'                       => 'uploads/bus21.png',
            'photo_2'                       => 'uploads/bus22.png',
        ]);
        Vehicle::create([
            'name'                          => 'Medium Truck',
            'move_type_id'                  => 1,
            'area_id'                       => 1,
            'size'                          => '5m * 5m * 5m',
            'load_weight'                   => '2,000kg',
            'volume'                        => '5',
            'init_distance'                 => 5,
            'init_price'                    => 100,
            'init_price_for_items'          => 200,
            'price_per_floor'               => 60,
            'price_per_big_item'            => 25,
            'price_per_floor_for_big_item'  => 3,
            'description'                   => 'This is test bus',
            'available_items'               => 'things less than 5m height',
            'unavailable_items'             => 'things more than 5m height',
            'vehicle_thumb'                 => 'uploads/bus_thumb3.png',
            'baggage_thumb'                 => 'uploads/baggage_thumb3.png',
            'photo_0'                       => 'uploads/bus30.png',
            'photo_1'                       => 'uploads/bus31.png',
            'photo_2'                       => 'uploads/bus32.png',
        ]);

        // Scale
        Scale::create([
            'name'                  => 'Small Move',
            'move_type_id'          => 2,
            'area_id'               => 1,
            'vehicle_description'   => '3m * 3m * 3m',
            'helper_description'    => '2 peoples follow',
            'init_price'            => 458,
            'main_photo'            => 'uploads/scale_main0.png',
            'vehicle_photo'         => 'uploads/scale_vehicle0.png',
            'helper_photo'          => 'uploads/scale_helper0.png',
        ]);
        Scale::create([
            'name'                  => 'Big Move',
            'move_type_id'          => 2,
            'area_id'               => 1,
            'vehicle_description'   => '5m * 5m * 5m',
            'helper_description'    => '3 peoples follow',
            'init_price'            => 618,
            'main_photo'            => 'uploads/scale_main1.png',
            'vehicle_photo'         => 'uploads/scale_vehicle1.png',
            'helper_photo'          => 'uploads/scale_helper1.png',
        ]);

        // Distance Price for Small Bus
        DistancePrice::create([
            'vehicle_id'    => 1,
            'from'          => 5,
            'to'            => 9999,
            'amount'        => 3,
        ]);

        // Distance Price for Medium Bus
        DistancePrice::create([
            'vehicle_id'    => 2,
            'from'          => 5,
            'to'            => 9999,
            'amount'        => 4,
        ]);

        // Distance Price for Small Truck
        DistancePrice::create([
            'vehicle_id'    => 3,
            'from'          => 5,
            'to'            => 9999,
            'amount'        => 4,
        ]);

        // Distance Price for Medium Truck
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 5,
            'to'            => 50,
            'amount'        => 5,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 50,
            'to'            => 80,
            'amount'        => 4.8,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 80,
            'to'            => 150,
            'amount'        => 4.5,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 150,
            'to'            => 9999,
            'amount'        => 5,
        ]);

        // Distance Price for Small Move
        DistancePrice::create([
            'scale_id'      => 1,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 0,
        ]);
        DistancePrice::create([
            'scale_id'      => 1,
            'from'          => 15,
            'to'            => 30,
            'amount'        => 7,
        ]);
        DistancePrice::create([
            'scale_id'      => 1,
            'from'          => 31,
            'to'            => 50,
            'amount'        => 8,
        ]);
        DistancePrice::create([
            'scale_id'      => 1,
            'from'          => 51,
            'to'            => 9999,
            'amount'        => 9,
        ]);

        // Distance Price for Big Move
        DistancePrice::create([
            'scale_id'      => 2,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 0,
        ]);
        DistancePrice::create([
            'scale_id'      => 2,
            'from'          => 15,
            'to'            => 30,
            'amount'        => 9,
        ]);
        DistancePrice::create([
            'scale_id'      => 2,
            'from'          => 31,
            'to'            => 50,
            'amount'        => 11,
        ]);
        DistancePrice::create([
            'scale_id'      => 2,
            'from'          => 51,
            'to'            => 9999,
            'amount'        => 12,
        ]);

        // Floor Price for Small Move
        FloorPrice::create([
            'scale_id'      => 1,
            'from'          => 0,
            'to'            => 1,
            'amount'        => 0,
        ]);
        FloorPrice::create([
            'scale_id'      => 1,
            'from'          => 2,
            'to'            => 6,
            'amount'        => 20,
        ]);
        FloorPrice::create([
            'scale_id'      => 1,
            'from'          => 7,
            'to'            => 99,
            'amount'        => 30,
        ]);

        // Floor Price for Big Move
        FloorPrice::create([
            'scale_id'      => 2,
            'from'          => 0,
            'to'            => 1,
            'amount'        => 0,
        ]);
        FloorPrice::create([
            'scale_id'      => 2,
            'from'          => 2,
            'to'            => 6,
            'amount'        => 20,
        ]);
        FloorPrice::create([
            'scale_id'      => 2,
            'from'          => 7,
            'to'            => 99,
            'amount'        => 30,
        ]);
    }
}
