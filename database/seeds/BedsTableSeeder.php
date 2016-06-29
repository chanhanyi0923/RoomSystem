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
        $bed_label = ['一大', '二小', '一大二小', '二大'];
        for ($i = 0; $i < 4; $i ++) {
            DB::table('beds')->insert([
                'label' => $bed_label[$i]
            ]);
        }
    }
}
