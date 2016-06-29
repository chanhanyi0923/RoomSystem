<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    public function run()
    {
        $state_label = ['住房', '清掃', '休息', '退房', '保養', '故障', '乾淨'];
        for ($i = 0; $i < 7; $i ++) {
            DB::table('states')->insert([
                'color' => ($i % 6),
                'label' => $state_label[$i]
            ]);
        }
    }
}
