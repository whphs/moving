<?php

use App\User;
use App\Models\Area;
use App\Models\MoveType;
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
            'email'     => 'roar0131@163.com',
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
    }
}
