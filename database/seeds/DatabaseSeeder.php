<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('item_types')->insert([
            ['name' => 'game'],
            ['name' => 'book'],
        ]);

        DB::table('item_states')->insert([
            ['name' => 'excellent'],
            ['name' => 'good'],
            ['name' => 'average'],
            ['name' => 'below average'],
            ['name' => 'bad'],
        ]);

        DB::table('statuses')->insert([
            ['name' => 'borrowed'],
            ['name' => 'damaged'],
            ['name' => 'lost'],
            ['name' => 'lost and paid'],
        ]);

        DB::table('users')->insert([
            [
                'firstname' => 'admin',
                'lastname' => 'admin',
                'username' => 'admin',
                'email' => 'admin@admin.admin',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'firstname' => 'user',
                'lastname' => 'user',
                'username' => 'user',
                'email' => 'user@user.user',
                'password' => bcrypt('useruser'),
                'role' => 'user',
            ],
        ]);
    }
}
