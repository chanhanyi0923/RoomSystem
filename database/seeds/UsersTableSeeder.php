<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {
        for($i = 0; $i < 10; $i ++) {
            DB::table('users')->insert([
                'name' => 'test'.$i,
                'email' => 'test'.$i.'@test.com',
                'password' => bcrypt('000000'),
                'admin' => ($i % 2)
            ]);
        }
    }
}
