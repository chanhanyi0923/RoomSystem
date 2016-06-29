<?php

use Illuminate\Database\Seeder;

class BedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i ++) {
            DB::table('beds')->insert([
                'label' => 'Bed' . ($i + 1)
            ]);
        }
    }
}
