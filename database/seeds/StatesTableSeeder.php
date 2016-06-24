<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder {
    public function run() {
        for($i = 0; $i < 10; $i ++) {
            DB::table('states')->insert([
                'color' => ($i % 6),
                'label' => '狀態' . ($i + 1)
            ]);
        }
    }
}
