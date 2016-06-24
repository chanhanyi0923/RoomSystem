<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoomSeeder extends Seeder {
    public function run() {
        for($i = 0; $i < 50; $i ++) {
            DB::table('rooms')->insert([
                'number' => 100 * ($i / 10) + ($i % 10),
                'state_id' => rand(1, 10)
            ]);
        }
    }
}
