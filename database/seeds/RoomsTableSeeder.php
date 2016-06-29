<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i ++) {
            for ($j = 0; $j < 2; $j ++) {
                for ($k = 0; $k < 8; $k ++) {
                    DB::table('rooms')->insert([
                        'number' => ($i + 1) * 100 + $j * 10 + $k + 1,
                        'state_id' => rand(1, 10),
                        'bed_id' => rand(1, 10)
                    ]);
                }
            }
        }
    }
}
