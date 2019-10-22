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
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name'      => 'Admin',
            'phone'     => '13394260131',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin'),
            'role_id'   => 0,
        ]);

        Area::create([
            'name'      => 'Dandong',
            'country'   => 'China',
            'zip_code'  => '118000'
        ]);

        MoveType::create([
            'name'      => 'Easy Move',
            'area_id'   => 1,
        ]);

        MoveType::create([
            'name'      => 'Safe Move',
            'area_id'   => 1,
        ]);

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
        ]);
        
        AboutUs::create([
            'title'         => 'About This App',
            'introduction'  => 'This App is to move your baggage',
            'email'         => 'admin@gmail.com',
            'phone'         => '13394260131',
            'address'       => 'Dandong, China',
            'website'       => 'http://www.baidu.com'
        ]);

        Agreement::create([
            'content'   => '<h4>About This App</h4><p>After screwing up my first booking in Dubai they rebooked me into another hotel and confirmed by email to me Upon arrival though the second hotel never received any confirmation and so no booking</p>',
        ]);

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

        Vehicle::create([
            'name'                          => 'Small Bus',
            'move_type_id'                  => 1,
            'area_id'                       => 1,
            'size'                          => '2m * 2m * 2m',
            'load_weight'                   => '500kg',
            'volume'                        => '2',
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
            'init_price_for_items'          => 50,
            'price_per_floor'               => 25,
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
            'init_price_for_items'          => 80,
            'price_per_floor'               => 35,
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
            'init_price_for_items'          => 150,
            'price_per_floor'               => 70,
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

        Scale::create([
            'name'                  => 'Small Move',
            'move_type_id'          => 2,
            'area_id'               => 1,
            'vehicle_description'   => '3m * 3m * 3m',
            'helper_description'    => '2 peoples follow',
            'init_price'            => 400,
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
            'init_price'            => 600,
            'main_photo'            => 'uploads/scale_main1.png',
            'vehicle_photo'         => 'uploads/scale_vehicle1.png',
            'helper_photo'          => 'uploads/scale_helper1.png',
        ]);

        // Small Bus
        DistancePrice::create([
            'vehicle_id'    => 1,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 30,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 1,
            'from'          => 15,
            'to'            => 9999,
            'amount'        => 35,
        ]);

        // Medium Bus
        DistancePrice::create([
            'vehicle_id'    => 2,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 50,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 2,
            'from'          => 15,
            'to'            => 9999,
            'amount'        => 55,
        ]);

        // Small Truck
        DistancePrice::create([
            'vehicle_id'    => 3,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 70,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 3,
            'from'          => 15,
            'to'            => 9999,
            'amount'        => 75,
        ]);

        // Medium Truck
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 100,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 15,
            'to'            => 100,
            'amount'        => 105,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 100,
            'to'            => 500,
            'amount'        => 110,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 500,
            'to'            => 1000,
            'amount'        => 115,
        ]);
        DistancePrice::create([
            'vehicle_id'    => 4,
            'from'          => 1000,
            'to'            => 9999,
            'amount'        => 120,
        ]);

        // Small Move
        DistancePrice::create([
            'scale_id'      => 1,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 0,
        ]);
        DistancePrice::create([
            'scale_id'      => 1,
            'from'          => 15,
            'to'            => 100,
            'amount'        => 10,
        ]);
        DistancePrice::create([
            'scale_id'      => 1,
            'from'          => 100,
            'to'            => 9999,
            'amount'        => 20,
        ]);

        // Big Move
        DistancePrice::create([
            'scale_id'      => 2,
            'from'          => 0,
            'to'            => 15,
            'amount'        => 0,
        ]);
        DistancePrice::create([
            'scale_id'      => 2,
            'from'          => 15,
            'to'            => 100,
            'amount'        => 20,
        ]);
        DistancePrice::create([
            'scale_id'      => 2,
            'from'          => 100,
            'to'            => 9999,
            'amount'        => 40,
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
            'from'          => 1,
            'to'            => 100,
            'amount'        => 2,
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
            'from'          => 1,
            'to'            => 100,
            'amount'        => 5,
        ]);
    }
}
