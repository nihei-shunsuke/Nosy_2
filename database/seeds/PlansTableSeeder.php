<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->truncate();

        $plans = [
            ['id' => 1,
            'title' => '博多に行く',
            'start_time' => '2021-06-18 12:00:00',
            'end_time' => '2021-06-18 18:00:00',
            'memo' => 'キャナルシティ広い'],
            ['id' => 2,
            'title' => 'キャナルシティに行く',
            'start_time' => '2021-06-18 19:00:00',
            'end_time' => '2021-06-18 21:00:00',
            'memo' => '楽しい']
        ];

        foreach($plans as $plan) {
            \App\Plan::create($plan);
        }
    }
}
