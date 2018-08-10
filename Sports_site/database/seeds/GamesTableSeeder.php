<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'team1' => 'Chicago Bulls',
            'team2' => 'Sacramento Kings',
            'score' => '',
            'winner' => '',
            'game_location' => 'Chicago',
            'game_time' => '07:20:00',
            'number_of_fouls' => '',
        ]);
        
        DB::table('games')->insert([
            'team1' => 'Indiana Pacers',
            'team2' => 'Sacramento Kings',
            'score' => '120 -95',
            'winner' => 'Indiana',
            'game_location' => 'Indiana',
            'game_time' => '08:30:00',
            'number_of_fouls' => '10',
        ]);

    }
}
